@extends('layouts.app')

@section('title', 'Asset Management')
@section('content')
    <div>
        <dl class="mx-auto grid grid-cols-1 gap-px bg-gray-900/5 lg:grid-cols-3">
            <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
                <dt class="text-sm font-medium leading-6 text-gray-500">Total Nilai Asset</dt>
                <dd class="text-xs font-medium text-gray-700">+4.75%</dd>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$405,091.00</dd>
            </div>
            <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
                <dt class="text-sm font-medium leading-6 text-gray-500">Nilai Saham</dt>
                <dd class="text-xs font-medium text-rose-600">+54.02%</dd>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$12,787.00</dd>
            </div>
            <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
                <dt class="text-sm font-medium leading-6 text-gray-500">Nilai Crypto</dt>
                <dd class="text-xs font-medium text-rose-600">+54.02%</dd>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$12,787.00</dd>
            </div>
        </dl>

        <div class="px-4 mt-5 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Asset anda</h1>
                    <p class="mt-2 text-sm text-gray-700">
                        Daftar semua aset yang anda miliki. Anda dapat menambah, mengedit, atau menghapus aset sesuai
                        kebutuhan.
                    </p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <!-- Tombol trigger -->
                    <button onclick="openModal()" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        Tambah Aset
                    </button>

                    <!-- Include modal -->
                    @include('asset.create')


                </div>
            </div>

            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">
                                        Nama</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Jenis</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Nilai</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($assets as $asset)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                        {{ $asset->nama_asset }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ ucfirst($asset->kategori) }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        @if (strtolower($asset->kategori) === 'saham' && $asset->saham)
                                        Rp {{ number_format($asset->saham->nilai_total, 0, ',', '.') }}
                                    @elseif (strtolower($asset->kategori) === 'crypto' && $asset->crypto)
                                        Rp {{ number_format($asset->crypto->nilai_total, 0, ',', '.') }}
                                    @else
                                        -
                                    @endif
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        @if (strtolower($asset->kategori) === 'saham' && $asset->saham)
                                            {{ number_format($asset->saham->jumlah_lot, 0, ',', '.') }} Lot
                                        @elseif (strtolower($asset->kategori) === 'crypto' && $asset->crypto)
                                            {{ number_format($asset->crypto->jumlah_koin, 0, ',', '.') }} Koin
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                class="sr-only">, {{$asset->nama_asset}}</span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
       
@endsection
