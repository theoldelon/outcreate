@extends('layouts.app')

@section('title', 'Manage Listings | OutCreate')

@section('content')

<!-- Sidebar Toggle Button -->
<button id="sidebarToggle" class="fixed top-4 left-4 z-50 text-light p-3 rounded-lg shadow-lg hover:bg-secondary transition-colors duration-300">
    <i class="fas fa-bars fa-lg"></i>
</button>

@include('components.sidebar')

<!-- Main Content -->
<main class="ml-64 p-6 bg-gray-100 min-h-screen">

    <!-- Manage Listings Section -->
    <section class="container mx-auto py-16 px-6 bg-white shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-4xl font-bold text-primary">Manage Listings</h2>
            <a href="{{ url('/manage-listings/create') }}" class="bg-primary text-light px-6 py-3 rounded-lg hover:bg-secondary transition-colors duration-300">Add New Listing</a>
        </div>

        <!-- Search and Filter -->
        <div class="mb-8">
            <form action="{{ url('/manage-listings') }}" method="GET" class="flex items-center space-x-4">
                <input type="text" name="search" placeholder="Search Listings..." class="w-full p-3 border border-gray-300 rounded-lg" value="{{ request()->get('search') }}">
                <select name="category" class="p-3 border border-gray-300 rounded-lg">
                    <option value="">All Categories</option>
                    <option value="Category A" {{ request()->get('category') == 'Category A' ? 'selected' : '' }}>Category A</option>
                    <option value="Category B" {{ request()->get('category') == 'Category B' ? 'selected' : '' }}>Category B</option>
                    <!-- Add more categories as needed -->
                </select>
                <button type="submit" class="bg-primary text-light px-6 py-3 rounded-lg hover:bg-secondary transition-colors duration-300">Search</button>
            </form>
        </div>

        <!-- Listings Table -->
        <div class="overflow-x-auto">
            <table class="w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-100 border-b border-gray-200">
                        <th class="p-4 text-left text-primary font-semibold">ID</th>
                        <th class="p-4 text-left text-primary font-semibold">Title</th>
                        <th class="p-4 text-left text-primary font-semibold">Category</th>
                        <th class="p-4 text-left text-primary font-semibold">Status</th>
                        <th class="p-4 text-left text-primary font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Hardcoded Listing Items -->
                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <td class="p-4 text-gray-800">1</td>
                        <td class="p-4 text-gray-800">Modern Apartment</td>
                        <td class="p-4 text-gray-800">Real Estate</td>
                        <td class="p-4 text-gray-800">Active</td>
                        <td class="p-4 flex space-x-2">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <td class="p-4 text-gray-800">2</td>
                        <td class="p-4 text-gray-800">Graphic Design Project</td>
                        <td class="p-4 text-gray-800">Design</td>
                        <td class="p-4 text-gray-800">Inactive</td>
                        <td class="p-4 flex space-x-2">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <td class="p-4 text-gray-800">3</td>
                        <td class="p-4 text-gray-800">E-commerce Website</td>
                        <td class="p-4 text-gray-800">Web Development</td>
                        <td class="p-4 text-gray-800">Active</td>
                        <td class="p-4 flex space-x-2">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <td class="p-4 text-gray-800">4</td>
                        <td class="p-4 text-gray-800">Mobile App Development</td>
                        <td class="p-4 text-gray-800">Mobile</td>
                        <td class="p-4 text-gray-800">Active</td>
                        <td class="p-4 flex space-x-2">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                        <td class="p-4 text-gray-800">5</td>
                        <td class="p-4 text-gray-800">Social Media Campaign</td>
                        <td class="p-4 text-gray-800">Marketing</td>
                        <td class="p-4 text-gray-800">Completed</td>
                        <td class="p-4 flex space-x-2">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                
                
            </table>
        </div>
    </section>
</main>

@endsection
