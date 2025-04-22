@extends('layouts.app')

@section('content')
    <div>
        <!-- content -->
        <!-- Stats -->
        <div>
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-indigo-500 p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Subscribers</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">71,897</p>
                        <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                            <svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only"> Increased by </span>
                            122
                        </p>
                        <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span
                                        class="sr-only"> Total Subscribers stats</span></a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-indigo-500 p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Avg. Open Rate</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">58.16%</p>
                        <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                            <svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only"> Increased by </span>
                            5.4%
                        </p>
                        <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span
                                        class="sr-only"> Avg. Open Rate stats</span></a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-indigo-500 p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Avg. Click Rate</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">24.57%</p>
                        <p class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                            <svg class="h-5 w-5 flex-shrink-0 self-center text-red-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only"> Decreased by </span>
                            3.2%
                        </p>
                        <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span
                                        class="sr-only"> Avg. Click Rate stats</span></a>
                            </div>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>

        <!-- Goals -->
        <div class="mt-5 mx-auto p-6 bg-white rounded-xl shadow-md">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Goals</h2>
                <a href="/goals" class="text-sm p-2 bg-indigo-500 rounded-md text-white">View All</a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="text-gray-500 text-sm border-b">
                        <tr>
                            <th class="py-2">Nama Goal</th>
                            <th class="py-2">Kategori</th>
                            <th class="py-2">Target</th>
                            <th class="py-2">Terkumpul</th>
                            <th class="py-2">Progress</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 flex items-center gap-3">
                                <img src="https://img.icons8.com/color/48/beach.png" alt="Goal Icon" class="w-6 h-6" />
                                Liburan ke Bali
                            </td>
                            <td class="py-4">Liburan</td>
                            <td class="py-4">Rp1.000.000</td>
                            <td class="py-4">Rp500.000</td>
                            <td class="py-4 w-1/3">
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 50%;"></div>
                                </div>
                                <span class="text-xs text-gray-500 mt-1 block">50%</span>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lain di sini jika ada goal tambahan -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Riwayat Transaksi -->
        <div class="bg-white rounded-xl shadow-md mt-5 p-6">
            <h2 class="text-xl font-semibold flex items-center gap-2 text-gray-800 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                Transaction History
            </h2>

            <!-- Filter Buttons -->
            <div class="inline-flex bg-gray-100 p-1 rounded-lg mb-4">
                <button id="filter-all"
                    class="px-4 py-2 text-sm font-medium rounded-md bg-blue-500 text-white transition">All</button>
                <button id="filter-income"
                    class="px-4 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-200 transition">Income</button>
                <button id="filter-expense"
                    class="px-4 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-200 transition">Expenses</button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody id="transaction-list" class="bg-white divide-y divide-gray-200">
                        <!-- Empty state -->
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 h-12 w-12 text-gray-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <p class="text-lg font-medium text-gray-700">No transactions found</p>
                                <p class="text-sm text-gray-500">Add a new transaction to get started</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection