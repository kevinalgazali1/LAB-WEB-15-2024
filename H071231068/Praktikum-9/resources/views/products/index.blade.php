@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-semibold text-gray-200">Products</h1>
        <a href="{{ route('products.create') }}"
            class="bg-teal-600 text-white px-5 py-2 rounded-md shadow-lg hover:bg-teal-700 transition-colors duration-300">
            Add Product
        </a>
    </div>

    <div class="overflow-x-fix bg-white shadow-md rounded-lg">
        <table class="min-w-full text-gray-800 bg-white rounded-lg">
            <thead class="bg-gradient-to-r from-blue-800 to-blue-600 text-white">
                <tr class="text-left border-b border-gray-200">
                    <th class="py-4 px-6 font-semibold">Name</th>
                    <th class="py-4 px-6 font-semibold">Category</th>
                    <th class="py-4 px-6 font-semibold">Price</th>
                    <th class="py-4 px-6 font-semibold">Stock</th>
                    <th class="py-4 px-6 font-semibold">Description</th>
                    <th class="py-4 px-6 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b hover:bg-gray-100 transition-all duration-300 ease-in-out">
                        <td class="py-3 px-4">{{ $product->name }}</td>
                        <td class="py-3 px-4">{{ $product->category->name }}</td>
                        <td class="py-3 px-4">{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="py-3 px-4">{{ $product->stock }}</td>
                        <td class="py-3 px-4">{{ $product->description }}</td>
                        <td class="py-3 px-4 flex space-x-2">
                            <a href="{{ route('products.edit', $product) }}"
                                class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition-colors duration-200 inline-flex items-center">
                                <i class="fas fa-edit text-sm"></i>
                                <span class="ml-1 text-sm">Edit</span>
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition-colors duration-200 inline-flex items-center">
                                    <i class="fas fa-trash-alt text-sm"></i>
                                    <span class="ml-1 text-sm">Delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
