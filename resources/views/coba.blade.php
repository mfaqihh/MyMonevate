@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Tambah Asset Baru</h1>

        <form action="{{ route('assets.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md" x-data="assetForm()">
            @csrf

            <!-- Nama Asset -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Asset</label>
                <input type="text" id="name" name="name" x-model="query" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category" x-model="category" @change="resetForm()" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="saham">Saham</option>
                    <option value="crypto">Crypto</option>
                </select>
            </div>

            <!-- Input Dinamis Berdasarkan Kategori -->
            <div x-show="category === 'saham'" class="saham-form">
                <div class="mb-4">
                    <label for="price_per_sheet" class="block text-sm font-medium text-gray-700">Harga per Lembar Saham</label>
                    <input type="number" id="price_per_sheet" name="price_per_sheet" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="lot_count" class="block text-sm font-medium text-gray-700">Jumlah Lot</label>
                    <input type="number" id="lot_count" name="lot_count" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>
            </div>

            <div x-show="category === 'crypto'" class="crypto-form">
                <div class="mb-4">
                    <label for="crypto_value" class="block text-sm font-medium text-gray-700">Jumlah Crypto</label>
                    <input type="number" step="0.00000001" id="crypto_value" name="crypto_value" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="current_price" class="block text-sm font-medium text-gray-700">Harga Saat Ini</label>
                    <input type="number" id="current_price" name="current_price" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>
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
        function assetForm() {
            return {
                query: '',
                category: 'saham',
                resetForm() {
                    // Reset form fields based on category selection
                    this.query = '';
                },
                submitForm() {
                    // Logika untuk pengiriman form, jika tidak menggunakan AJAX
                    console.log("Form submitted!");
                    // Jika ingin form benar-benar dikirim, gunakan `this.$el.submit()` untuk mengirim form
                    this.$el.submit();
                }
            };
        }
    </script>
@endsection
