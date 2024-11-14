@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Add Inventory Log</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-500 text-red-700 rounded-md">
                <strong class="font-bold">There were some problems with your input.</strong>
                <ul class="list-disc pl-5 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('inventoryLog.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="product_id" class="block text-gray-700 font-medium mb-2">Product:</label>
                <select id="product_id" name="product_id"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200 text-black"
                    required>
                    <option value="" disabled selected>Select a product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700 font-medium mb-2">Type:</label>
                <select id="type" name="type"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200 text-black"
                    required>
                    <option value="" disabled selected>Select a type</option>
                    <option value="restock">Restock</option>
                    <option value="sold">Sold</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 font-medium mb-2">Quantity:</label>
                <input type="number" id="quantity" name="quantity"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200 text-black"
                    required min="1">
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-medium mb-2">Date:</label>
                <input type="date" id="date" name="date"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200 text-black"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-md font-semibold hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
                Add Inventory Log
            </button>
        </form>
    </div>
@endsection
