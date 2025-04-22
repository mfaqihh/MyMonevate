@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Tambah Asset Baru</h1>

        <form action="{{ route('assets.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            @csrf

            <!-- Nama Asset dengan Autocomplete -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Asset</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category" x-model="category" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="crypto">Crypto</option>
                    <option value="saham">Saham</option>
                </select>
            </div>

            <!-- Harga per Lembar Saham (Hanya tampilkan jika kategori saham) -->
            <div class="mb-4" id="price_per_sheet_div">
                <label for="price_per_sheet" class="block text-sm font-medium text-gray-700">Harga per Lembar Saham</label>
                <input type="number" id="price_per_sheet" name="price_per_sheet" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Jumlah Lot (Hanya tampilkan jika kategori saham) -->
            <div class="mb-4" id="lot_count_div">
                <label for="lot_count" class="block text-sm font-medium text-gray-700">Jumlah Lot</label>
                <input type="number" id="lot_count" name="lot_count" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Nilai Crypto (Hanya tampilkan jika kategori crypto) -->
            <div class="mb-4" id="crypto_value_div">
                <label for="crypto_value" class="block text-sm font-medium text-gray-700">Nilai Crypto</label>
                <input type="number" id="crypto_value" name="crypto_value" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Harga Crypto Saat Ini (Hanya tampilkan jika kategori crypto) -->
            <div class="mb-4" id="current_price_div">
                <label for="current_price" class="block text-sm font-medium text-gray-700">Harga Crypto Saat Ini</label>
                <input type="number" id="current_price" name="current_price" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Tombol Submit -->
            <div class="mb-4 flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Tambah Asset
                </button>
            </div>
        </form>
    </div>

    <script>
        // Fungsi untuk menampilkan input sesuai kategori yang dipilih
        document.getElementById('category').addEventListener('change', function() {
            let category = this.value;
            if (category == 'saham') {
                document.getElementById('price_per_sheet_div').style.display = 'block';
                document.getElementById('lot_count_div').style.display = 'block';
                document.getElementById('crypto_value_div').style.display = 'none';
                document.getElementById('current_price_div').style.display = 'none';
            } else {
                document.getElementById('price_per_sheet_div').style.display = 'none';
                document.getElementById('lot_count_div').style.display = 'none';
                document.getElementById('crypto_value_div').style.display = 'block';
                document.getElementById('current_price_div').style.display = 'block';
            }
        });

        // Set default display based on the initial category selected
        document.addEventListener('DOMContentLoaded', function () {
            let category = document.getElementById('category').value;
            if (category == 'saham') {
                document.getElementById('price_per_sheet_div').style.display = 'block';
                document.getElementById('lot_count_div').style.display = 'block';
                document.getElementById('crypto_value_div').style.display = 'none';
                document.getElementById('current_price_div').style.display = 'none';
            } else {
                document.getElementById('price_per_sheet_div').style.display = 'none';
                document.getElementById('lot_count_div').style.display = 'none';
                document.getElementById('crypto_value_div').style.display = 'block';
                document.getElementById('current_price_div').style.display = 'block';
            }
        });
    </script>
@endsection
