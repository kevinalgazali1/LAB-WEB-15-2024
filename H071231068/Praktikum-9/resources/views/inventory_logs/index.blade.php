@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-white-800">Inventory Logs</h1>
        <a href="{{ route('inventoryLog.create') }}"
            class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
            Add Inventory Log
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-500 text-green-700 rounded-md shadow-lg">
            <strong class="font-bold">Success!</strong>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="overflow-x-fix bg-white shadow-lg rounded-lg">
        <table class="min-w-full text-gray-800 bg-white rounded-lg">
            <thead>
                <tr class="text-left bg-gradient-to-r from-blue-500 to-blue-700 text-white">
                    <th class="py-3 px-4 font-medium">Product</th>
                    <th class="py-3 px-4 font-medium">Type</th>
                    <th class="py-3 px-4 font-medium">Quantity</th>
                    <th class="py-3 px-4 font-medium">Date</th>
                    <th class="py-3 px-4 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventoryLogs as $log)
                    <tr class="border-b hover:bg-gray-100 transition-all duration-300 transform hover:scale-102">
                        <td class="py-3 px-4">{{ $log->product->name }}</td>
                        <td class="py-3 px-4">{{ ucfirst($log->type) }}</td>
                        <td class="py-3 px-4">{{ $log->quantity }}</td>
                        <td class="py-3 px-4">{{ $log->date}}</td>
                        <td class="py-3 px-4 space-x-2">
                            <form action="{{ route('inventoryLog.destroy', $log) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700 transition-colors duration-300 inline-flex items-center shadow-md transform hover:scale-105">
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
