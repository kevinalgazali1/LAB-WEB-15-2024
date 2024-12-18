@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Kategori</h1>


        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
                <strong class="font-bold">Ada beberapa masalah dengan input Anda:</strong>
                <ul class="list-disc pl-5 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Kategori:</label>
                <input type="text" id="name" name="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('name') border-red-500 focus:ring-red-500 @enderror"
                    value="{{ old('name') }}" required autofocus aria-label="Category Name">
                @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi:</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('description') border-red-500 focus:ring-red-500 @enderror"
                    aria-label="Category Description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-md font-semibold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition-colors duration-200"
                aria-label="Add Category">
                Tambah Kategori
            </button>
        </form>        
@endsection
