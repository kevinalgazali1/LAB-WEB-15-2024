@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Products</h1>
        <a href="{{ route('products.create') }}" class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
            Add Product
        </a>
    </div>
    
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="text-left bg-gray-200 border-b">
                    <th class="py-3 px-4 text-gray-700 font-medium">Name</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Category</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Price</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Stock</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Description</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $product->name }}</td>
                        <td class="py-3 px-4">{{ $product->category->name }}</td>
                        <td class="py-3 px-4">{{ number_format($product->price, 2, ',', '.') }}</td>
                        <td class="py-3 px-4">{{ $product->stock }}</td>
                        <td class="py-3 px-4">{{ $product->description }}</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-400 text-yellow-900 px-3 py-1 rounded-md hover:bg-yellow-500 transition-colors duration-200 inline-flex items-center">
                                <i class="fas fa-edit"></i>
                                <span class="ml-1">Edit</span>
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition-colors duration-200 inline-flex items-center">
                                    <i class="fas fa-trash-alt"></i>
                                    <span class="ml-1">Delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
