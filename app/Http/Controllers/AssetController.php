<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\SahamDetail;
use App\Models\CryptoDetail;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    // Menampilkan daftar asset
    public function index()
    {

        $assets = Asset::with(['sahamDetail', 'cryptoDetail'])->get();
        // Menghitung total nilai saham dan crypto
        $totalNilai = $assets->sum(function ($asset) {
            $sahamValue = $asset->sahamDetail ? $asset->sahamDetail->total_price : 0;
            $cryptoValue = $asset->cryptoDetail ? $asset->cryptoDetail->crypto_value : 0;
            return $sahamValue + $cryptoValue;
        });
        $totalSaham = $assets->filter(function ($asset) {
            return $asset->category === 'saham';
        })->sum(function ($asset) {
            return $asset->sahamDetail ? $asset->sahamDetail->total_price : 0;
        });
    
        $totalCrypto = $assets->filter(function ($asset) {
            return $asset->category === 'crypto';
        })->sum(function ($asset) {
            return $asset->cryptoDetail ? $asset->cryptoDetail->crypto_value : 0;
        });
    
        // Prepare data for chart
        $chartData = [
            'labels' => ['Saham', 'Crypto'],
            'datasets' => [
                [
                    'label' => 'Asset Allocation',
                    'data' => [$totalSaham, $totalCrypto],
                    'backgroundColor' => ['#4e73df', '#1cc88a'], // Custom colors for Saham and Crypto
                    'hoverBackgroundColor' => ['#2e59d9', '#17a673'],
                ]
            ]
        ];
    
        return view('assets.index', compact('assets', 'totalSaham', 'totalCrypto', 'chartData', 'totalNilai'));
    }

    // Menampilkan form untuk menambahkan asset baru
    public function create()
    {
        return view('assets.create');
    }

    // Menyimpan asset baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:saham,crypto',
            'price_per_sheet' => 'nullable|numeric',
            'lot_count' => 'nullable|integer',
            'crypto_value' => 'nullable|numeric',
            'current_price' => 'nullable|numeric',
        ]);

        // Membuat asset baru
        $asset = Asset::create([
            'name' => $request->name,
            'category' => $request->category,
        ]);

        // Menambahkan detail berdasarkan kategori asset
        if ($request->category == 'saham') {
            $totalPrice = $request->price_per_sheet * $request->lot_count;
            SahamDetail::create([
                'asset_id' => $asset->id,
                'price_per_sheet' => $request->price_per_sheet,
                'lot_count' => $request->lot_count,
                'total_price' => $totalPrice,
            ]);
        } elseif ($request->category == 'crypto') {
            CryptoDetail::create([
                'asset_id' => $asset->id,
                'crypto_value' => $request->crypto_value,
                'current_price' => $request->current_price,
            ]);
        }

        return redirect()->route('assets.index')->with('success', 'Asset created successfully');
    }

    // Menampilkan form untuk mengedit asset
    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.edit', compact('asset'));
    }

    // Menyimpan perubahan asset
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:saham,crypto',
            'price_per_sheet' => 'nullable|numeric',
            'lot_count' => 'nullable|integer',
            'crypto_value' => 'nullable|numeric',
            'current_price' => 'nullable|numeric',
        ]);

        $asset = Asset::findOrFail($id);
        $asset->update([
            'name' => $request->name,
            'category' => $request->category,
        ]);

        // Menambahkan atau memperbarui detail berdasarkan kategori asset
        if ($request->category == 'saham') {
            $totalPrice = $request->price_per_sheet * ($request->lot_count * 100);
            $sahamDetail = $asset->sahamDetail ?? new SahamDetail();
            $sahamDetail->fill([
                'price_per_sheet' => $request->price_per_sheet,
                'lot_count' => $request->lot_count,
                'total_price' => $totalPrice,
            ]);
            $sahamDetail->asset_id = $asset->id;
            $sahamDetail->save();
        } elseif ($request->category == 'crypto') {
            $cryptoDetail = $asset->cryptoDetail ?? new CryptoDetail();
            $cryptoDetail->fill([
                'crypto_value' => $request->crypto_value,
                'current_price' => $request->current_price,
            ]);
            $cryptoDetail->asset_id = $asset->id;
            $cryptoDetail->save();
        }

        return redirect()->route('assets.index')->with('success', 'Asset updated successfully');
    }

    // Menghapus asset dan detail terkait
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);

        // Menghapus detail terkait (baik saham atau crypto)
        $asset->sahamDetail()->delete();
        $asset->cryptoDetail()->delete();

        // Menghapus asset
        $asset->delete();

        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully');
    }
}

