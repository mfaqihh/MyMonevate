<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\SahamDetail;
use App\Models\CryptoDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AssetController extends Controller
{
    // Tampilkan semua asset milik user
    public function index()
    {
        $assets = Asset::where('id_user', Auth::id())
            ->with(['saham', 'crypto']) // hanya saham dan crypto
            ->get();

        return view('asset.index', compact('assets'));
    }

    // Form tambah asset
    public function create()
    {
        return view('asset.create');
    }

    // Simpan asset baru
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|in:saham,crypto',
            'nama_asset' => 'required|string',
            'kode_asset' => 'nullable|string',
            'tanggal_beli' => 'required|date',
            // Saham
            'jumlah_lot' => 'required_if:kategori,saham|integer|min:1',
            'harga_per_lot' => 'required_if:kategori,saham|numeric|min:0',
            // Crypto
            'jumlah_koin' => 'required_if:kategori,crypto|numeric|min:0',
            'harga_per_koin' => 'required_if:kategori,crypto|numeric|min:0',
        ]);

        $asset = Asset::create([
            'id_user' => Auth::id(),
            'kategori' => $request->kategori,
            'nama_asset' => $request->nama_asset,
            'kode_asset' => $request->kode_asset,
            'tanggal_beli' => $request->tanggal_beli,
        ]);

        switch ($request->kategori) {
            case 'saham':
                SahamDetail::create([
                    'id_asset' => $asset->id,
                    'jumlah_lot' => $request->jumlah_lot,
                    'harga_per_lot' => $request->harga_per_lot,
                    'nilai_total' => $request->jumlah_lot * $request->harga_per_lot * 100,
                ]);
                break;

            case 'crypto':
                CryptoDetail::create([
                    'id_asset' => $asset->id,
                    'jumlah_koin' => $request->jumlah_koin,
                    'harga_per_koin' => $request->harga_per_koin,
                    'nilai_total' => $request->jumlah_koin * $request->harga_per_koin,
                ]);
                break;
        }

        return redirect()->route('asset.index')->with('success', 'Asset berhasil ditambahkan.');
    }

    public function getStockPrice($symbol)
    {
        $apiKey = env('API_KEY_ALPHAVANTAGE');
        $url = "https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol={$symbol}&apikey={$apiKey}";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['Time Series (Daily)'])) {
                $latestDate = array_key_first($data['Time Series (Daily)']);
                $latestClose = $data['Time Series (Daily)'][$latestDate]['4. close'];

                return [
                    'symbol' => $symbol,
                    'latest_price' => $latestClose,
                    'latest_date' => $latestDate
                ];
            } else {
                return response()->json(['error' => 'Data saham tidak ditemukan atau salah simbol.'], 404);
            }
        } else {
            return response()->json(['error' => 'Gagal terhubung ke API Alpha Vantage.'], 500);
        }
    }

    public function getCryptoPrice($coinId)
    {
        $url = "https://api.coingecko.com/api/v3/simple/price?ids={$coinId}&vs_currencies=idr";
    
        $response = Http::get($url);
    
        if ($response->successful()) {
            $data = $response->json();
    
            if (isset($data[$coinId])) {
                return [
                    'coin' => $coinId,
                    'price_idr' => $data[$coinId]['idr']
                ];
            } else {
                return response()->json(['error' => 'Data coin tidak ditemukan.'], 404);
            }
        } else {
            return response()->json(['error' => 'Gagal terhubung ke API CoinGecko.'], 500);
        }
    }
    


    // Tambahkan edit, update, dan delete nanti sesuai kebutuhan
}
