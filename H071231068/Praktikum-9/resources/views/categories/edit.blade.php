@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Edit Kategori</h1>
            <a href="{{ route('categories.index') }}" 
               class="text-gray-600 hover:text-gray-800 transition-colors duration-200">
                <i class="fas fa-arrow-left mr-2"></i>Kembali
            </a>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg mb-4">
                <div class="flex items-center mb-2">
                    <i class="fas fa-exclamation-triangle mr-2 text-red-500"></i>
                    <strong class="font-bold">Terdapat beberapa masalah dengan input Anda:</strong>
                </div>
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">
                    Nama Kategori <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md 
                               text-gray-800 // Tambahkan ini
                               focus:outline-none focus:ring-2 focus:ring-blue-500 
                               @error('name') border-red-500 @enderror"
                        value="{{ old('name', $category->name) }}" 
                        required 
                        autofocus 
                        placeholder="Masukkan nama kategori"
                        aria-label="Nama Kategori">
                    @error('name')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-red-500">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                    @enderror
                </div>
                @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-medium mb-2">
                    Deskripsi <span class="text-gray-500 text-sm">(Opsional)</span>
                </label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md 
                           text-gray-800 // Tambahkan ini
                           focus:outline-none focus:ring-2 focus:ring-blue-500 
                           @error('description') border-red-500 @enderror"
                    placeholder="Berikan deskripsi singkat kategori"
                    aria-label="Deskripsi Kategori">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex space-x-4">
                <button type="submit"
                    class="flex-1 bg-green-600 text-white py-2 rounded-md font-semibold 
                           hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 
                           transition-colors duration-200 flex items-center justify-center">
                    <i class="fas fa-save mr-2"></i>Update Kategori
                </button>
                <a href="{{ route('categories.index') }}"
                    class="flex-1 bg-gray-200 text-gray-700 py-2 rounded-md font-semibold 
                           hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 
                           transition-colors duration-200 text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection