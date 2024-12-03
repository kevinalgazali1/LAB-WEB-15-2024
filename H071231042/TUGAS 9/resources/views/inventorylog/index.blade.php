@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Inventory Logs</h1>
        <a href="{{ route('inventoryLog.create') }}" class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
            Add Inventory Log
        </a>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="text-left bg-gray-200 border-b">
                    <th class="py-3 px-4 text-gray-700 font-medium">Product</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Type</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Quantity</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Date</th>
                    <th class="py-3 px-4 text-gray-700 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $log->product->name }}</td>
                        <td class="py-3 px-4">{{ $log->type }}</td>
                        <td class="py-3 px-4">{{ $log->quantity }}</td>
                        <td class="py-3 px-4">{{ $log->date }}</td>
                        <td class="py-3 px-4">
                            <form action="{{ route('inventoryLog.destroy', $log) }}" method="POST" class="inline-block">
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
