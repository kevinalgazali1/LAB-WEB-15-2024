@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-gradient-to-b from-blue-900 to-blue-700 p-8 rounded-lg shadow-lg text-white">
        <h1 class="text-3xl font-semibold mb-8 text-center">Add Product</h1>

        @if ($errors->any())
            <div class="bg-red-200 border border-red-500 text-red-900 px-4 py-3 rounded-lg mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-6">
                <label for="category_id" class="block font-medium mb-2">Category:</label>
                <select id="category_id" name="category_id"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500"
                    required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="name" class="block font-medium mb-2">Name:</label>
                <input type="text" id="name" name="name"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500"
                    value="{{ old('name') }}" required>
            </div>

            <div class="mb-6">
                <label for="description" class="block font-medium mb-2">Description:</label>
                <textarea id="description" name="description"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500 resize-none"
                    rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="mb-6">
                <label for="price" class="block font-medium mb-2">Price:</label>
                <input type="number" step="0.01" id="price" name="price"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500"
                    value="{{ old('price') }}" required>
            </div>

            <div class="mb-6">
                <label for="stock" class="block font-medium mb-2">Stock:</label>
                <input type="number" id="stock" name="stock"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500"
                    value="{{ old('stock') }}" required>
            </div>

            <button type="submit"
                class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition-all duration-300 transform hover:scale-105">
                Add Product
            </button>
        </form>
    </div>
@endsection
