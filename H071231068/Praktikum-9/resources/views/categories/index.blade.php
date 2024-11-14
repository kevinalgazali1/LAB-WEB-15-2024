@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-white-800">Categories</h1>
        <a href="{{ route('categories.create') }}"
            class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-teal-600 transition-colors duration-200">
            Add Category
        </a>
    </div>

    <div class="overflow-x-fix bg-white shadow-md rounded-lg">
        <table class="min-w-full text-gray-800 bg-white rounded-lg">
            <thead class="bg-gradient-to-r from-blue-800 to-blue-600>
                <tr class="text-left bg-gray-100 border-b">
                    <th class="py-4 px-6 font-semibold">Name</th>
                    <th class="py-4 px-6 font-semibold">Description</th>
                    <th class="py-4 px-6 font-semibold text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b hover:bg-gray-50 transition-all duration-300 ease-in-out">
                        <td class="py-4 px-4 text-gray-800">{{ $category->name }}</td>
                        <td class="py-4 px-4 text-gray-600">{{ $category->description }}</td>
                        <td class="py-4 px-4 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('categories.edit', $category) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition-colors duration-200 inline-flex items-center">
                                    <i class="fas fa-edit text-sm"></i>
                                    <span class="ml-1 text-sm">Edit</span>
                                </a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                        class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition-colors duration-200 inline-flex items-center">
                                        <i class="fas fa-trash-alt text-sm"></i>
                                        <span class="ml-1 text-sm">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($categories->isEmpty())
            <div class="text-center py-6 text-gray-500">
                No categories found. <a href="{{ route('categories.create') }}" class="text-teal-500 hover:underline">Create one</a>
            </div>
        @endif
    </div>
@endsection
