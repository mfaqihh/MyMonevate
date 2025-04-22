@extends('layouts.app')

@section('title', 'Edit Goal')

@section('content')
<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Edit Goal
        </h3>
    </div>

    <form action="{{ route('goals.update', $goal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid gap-4 mb-4 grid-cols-2 p-4">
            <div class="col-span-2">
                <label for="goal_category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select name="goal_category_id" id="goal_category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($goalCategories as $category)
                        <option value="{{ $category->id }}" {{ $goal->goal_category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Goal</label>
                <input type="text" id="name" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    value="{{ $goal->name }}" required>
            </div>

            <div class="col-span-2">
                <label for="budget" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Budget</label>
                <input type="number" id="budget" name="budget" step="0.01"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    value="{{ $goal->budget }}" required>
            </div>

            <div class="col-span-2">
                <label for="target_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Target</label>
                <input type="date" id="target_date" name="target_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    value="{{ $goal->target_date ? $goal->target_date->format('Y-m-d') : '' }}" required>
            </div>
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex justify-between px-4 pb-4">
            <a href="{{ route('goals.index') }}"
                class="text-white text-sm font-medium bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-400">
                Kembali
                </a>
            <button type="submit"
            class="text-white text-sm font-medium bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-400">
            Update
            </button>
        </div>
    </form>
</div>
@endsection