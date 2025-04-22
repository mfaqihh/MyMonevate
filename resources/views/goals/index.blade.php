@extends('layouts.app')

@section('title', 'Goals Management')

@section('content')
<div class="container mx-auto px-4">
    {{-- Card Header --}}
    <div class="mt-6 mb-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Goals Kamu</h3>
                <a href="{{ route('goals.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-500 transition">
                    Tambah Goal
                </a>
            </div>

            {{-- Notifikasi Sukses --}}
            @if (session('success'))
                <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded-md text-sm">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Tabel Goals --}}
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 divide-y divide-gray-300 text-sm text-gray-800">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-center">
                        <tr>
                            <th class="border px-4 py-2">Kategori</th>
                            <th class="border px-4 py-2">Nama Goal</th>
                            <th class="border px-4 py-2">Budget</th>
                            <th class="border px-4 py-2">Tanggal Target</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($goals as $goal)
                            <tr class="bg-white hover:bg-gray-50 transition">
                                <td class="border px-4 py-2">{{ $goal->category->name ?? 'Kategori tidak ditemukan' }}</td>
                                <td class="border px-4 py-2">{{ $goal->name }}</td>
                                <td class="border px-4 py-2">Rp {{ number_format($goal->budget, 0, ',', '.') }}</td>
                                <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($goal->target_date)->format('d M Y') }}</td>
                                <td class="border px-4 py-2 text-center space-x-2">
                                    <a href="{{ route('goals.edit', $goal->id) }}" class="bg-blue-600 text-white px-3 py-1 rounded text-xs hover:bg-blue-500">
                                        Edit
                                    </a>
                                    <form action="{{ route('goals.destroy', $goal->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin ingin hapus?')" class="bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-500">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 border">Belum ada goal yang ditambahkan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
