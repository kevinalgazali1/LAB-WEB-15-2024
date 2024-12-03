@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Add Product</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="category_id" class="block text-gray-700 font-medium mb-2">Category:</label>
                <select id="category_id" name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name:</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description:</label>
                <textarea id="description" name="description" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium mb-2">Price:</label>
                <input type="number" step="0.01" id="price" name="price" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('price') }}" required>
            </div>

            <div class="mb-4">
                <label for="stock" class="block text-gray-700 font-medium mb-2">Stock:</label>
                <input type="number" id="stock" name="stock" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('stock') }}" required>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-md font-semibold hover:bg-green-700 transition-colors duration-200">
                Add Product
            </button>
        </form>
    </div>
@endsection
