@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-4">
        <!-- Card Total Nilai Asset -->
        <div>
            <dl
                class="mt-5 grid grid-cols-1 divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow md:grid-cols-3 md:divide-x md:divide-y-0">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-base font-normal text-gray-900">Total Nilai</dt>
                    <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                            Rp {{ number_format($totalNilai, 2) }}
                            <span class="ml-2 text-sm font-medium text-gray-500">from 70,946</span>
                        </div>

                        <div
                            class="inline-flex items-baseline rounded-full bg-green-100 px-2.5 py-0.5 text-sm font-medium text-green-800 md:mt-2 lg:mt-0">
                            <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only"> Increased by </span>
                            12%
                        </div>
                    </dd>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-base font-normal text-gray-900">Total Saham</dt>
                    <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                            Rp {{ number_format($totalSaham, 2) }}
                            <span class="ml-2 text-sm font-medium text-gray-500">from 56.14%</span>
                        </div>

                        <div
                            class="inline-flex items-baseline rounded-full bg-green-100 px-2.5 py-0.5 text-sm font-medium text-green-800 md:mt-2 lg:mt-0">
                            <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only"> Increased by </span>
                            2.02%
                        </div>
                    </dd>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-base font-normal text-gray-900">Total Crypto</dt>
                    <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                            Rp {{ number_format($totalCrypto, 2) }}
                            <span class="ml-2 text-sm font-medium text-gray-500">from 28.62%</span>
                        </div>

                        <div
                            class="inline-flex items-baseline rounded-full bg-red-100 px-2.5 py-0.5 text-sm font-medium text-red-800 md:mt-2 lg:mt-0">
                            <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-red-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only"> Decreased by </span>
                            4.05%
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
        <!-- Card Total Nilai Asset End -->


        <!-- Card Chart -->
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Chart alokasi asset -->
            <div class="col-span-1 sm:col-span-2 lg:col-span-1 bg-white shadow rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900">Alokasi Asset</h2>
                <canvas id="assetChart" class="mt-4"></canvas>
            </div>
            <div class="col-span-1 sm:col-span-2 lg:col-span-1 bg-white shadow rounded-lg p-6"
                x-data="cryptoCard()">
                <!-- Card Header -->
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-semibold text-gray-800">Cryptocurrency Prices</h2>
                    <button @click="fetchPrices"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm focus:outline-none hover:bg-blue-600 transition duration-200">
                        <i class="fas fa-sync-alt mr-2"></i>Refresh
                    </button>
                </div>

                <!-- Crypto List -->
                <div class="space-y-4">
                    <template x-for="crypto in cryptos" :key="crypto . symbol">
                        <div
                            class="flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-sm hover:shadow-md transition duration-200">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-medium text-gray-800" x-text="crypto.name"></span>
                                <span class="text-xs text-gray-500" x-text="crypto.symbol.toUpperCase()"></span>
                            </div>
                            <span class="text-xl font-semibold text-indigo-600"
                                x-text="'Rp ' + crypto.price.toLocaleString()"></span>
                        </div>
                    </template>
                </div>

                <!-- Last Updated Time -->
                <div class="flex justify-between items-center text-xs text-gray-400 mt-4">
                    <span x-text="'Last Updated: ' + lastUpdated"></span>
                    <button @click="fetchPrices" class="text-blue-500 hover:text-blue-600">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
            </div>


        </div>

        <!-- Table Asset -->
        <div class="px-4 sm:px-6 lg:px-8 mt-6 py-6 bg-white shadow rounded-lg">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">Assets</h1>
                    <p class="mt-2 text-sm text-gray-700">Manage your digital and physical assets, including stocks and
                        crypto.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none flex items-center space-x-4">
                    <a href="{{ Route('assets.create') }}"
                        class="block rounded-md bg-indigo-600 px-4 py-2 text-center text-sm font-semibold text-white shadow-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50">
                        Add Asset
                    </a>
                    <select
                        class="block rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        <option value="" disabled>Select Category</option>
                        <option value="saham">Saham</option>
                        <option value="crypto">Crypto</option>
                    </select>
                </div>
            </div>

            <!-- Table -->
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-indigo-600 text-white">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-100 sm:pl-6 lg:pl-8">
                                        Nama Asset</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">
                                        Category</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">
                                        Harga Saat ini</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">
                                        Nilai</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($assets as $asset)
                                    <tr class="hover:bg-indigo-100 transition-all duration-200">
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                            {{ $asset->name }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $asset->category }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            @if ($asset->category == 'saham')
                                                Rp {{ number_format($asset->sahamDetail->price_per_sheet, 2) }} / Lembar
                                            @elseif ($asset->category == 'crypto')
                                                Rp {{ number_format($asset->cryptoDetail->current_price, 2) }}
                                            @endif
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            @if ($asset->category == 'saham')
                                                {{ number_format($asset->sahamDetail->lot_count) }} Lot
                                            @elseif ($asset->category == 'crypto')
                                                Rp {{ number_format($asset->cryptoDetail->crypto_value, 2) }}
                                            @endif
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                            <a href="{{ Route('assets.edit', $asset->id) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form action="{{ Route('assets.destroy', $asset->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-4 py-2 text-red-600 hover:text-red-900">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-gray-500">Belum ada asset ditambahkan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            <nav class="relative z-0 inline-flex shadow-sm rounded-md">
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                    Previous
                </a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                    1
                </a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                    2
                </a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                    Next
                </a>
            </nav>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('assetChart').getContext('2d');
            var assetChart = new Chart(ctx, {
                type: 'doughnut',
                data: @json($chartData), // Pass data from PHP to JavaScript
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function (tooltipItem) {
                                    var value = tooltipItem.raw;
                                    return tooltipItem.label + ': Rp ' + value.toLocaleString();
                                }
                            }
                        }
                    },
                    aspectRatio: 1.5, // Adjust to make the chart more square
                }
            });
        });
    </script>

    <script>
        function cryptoCard() {
            return {
                cryptos: [],
                lastUpdated: "Memuat...",

                // Fetch data from CoinGecko
                async fetchPrices() {
                    const url = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,ripple,litecoin,cardano&vs_currencies=idr';

                    try {
                        const response = await fetch(url);
                        const data = await response.json();

                        this.cryptos = [
                            { name: 'Bitcoin', symbol: 'bitcoin', price: data.bitcoin.idr },
                            { name: 'Ethereum', symbol: 'ethereum', price: data.ethereum.idr },
                            { name: 'Ripple', symbol: 'ripple', price: data.ripple.idr },
                            { name: 'Litecoin', symbol: 'litecoin', price: data.litecoin.idr },
                            { name: 'Cardano', symbol: 'cardano', price: data.cardano.idr }
                        ];

                        // Update last updated time
                        this.lastUpdated = new Date().toLocaleString();
                    } catch (error) {
                        console.error('Error fetching data:', error);
                        this.cryptos = [{ name: 'Error', price: 'N/A' }];
                    }
                },

                // Initial fetch when page loads
                init() {
                    this.fetchPrices();
                }
            }
        }

        // Initialize Alpine.js component
        document.addEventListener('alpine:init', () => {
            Alpine.data('cryptoCard', cryptoCard);
        });
    </script>


@endsection