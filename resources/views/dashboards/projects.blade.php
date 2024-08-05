@extends('layouts.app')

@section('title', 'Projects | Dashboard')

@section('content')
    <div class="flex">
        <button id="sidebarToggle" class="fixed top-4 left-4 z-50 text-light p-3 rounded-lg shadow-lg hover:bg-secondary transition-colors duration-300">
            <i class="fas fa-bars fa-lg"></i>
        </button>

        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100">
            <!-- Page Title -->
            <section class="container mx-auto py-16 mt-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-10">Projects</h1>

                <!-- Search Bar and Filters -->
                <div class="flex flex-col lg:flex-row justify-between items-center mb-10">
                    <input type="text" placeholder="Search projects..." class="border border-gray-300 p-4 rounded-lg shadow-lg w-full lg:w-1/2 focus:outline-none focus:ring-2 focus:ring-primary transition-colors duration-300 mb-4 lg:mb-0">
                    
                    <!-- Filters -->
                    <div class="flex space-x-4">
                        <select class="border border-gray-300 p-3 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-primary transition-colors duration-300">
                            <option value="">Sort by</option>
                            <option value="date">Date</option>
                            <option value="budget">Budget</option>
                            <option value="status">Status</option>
                        </select>
                        
                        <select class="border border-gray-300 p-3 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-primary transition-colors duration-300">
                            <option value="">Category</option>
                            <option value="design">Design</option>
                            <option value="development">Development</option>
                            <option value="marketing">Marketing</option>
                        </select>
                    </div>
                </div>

                <!-- Featured Projects -->
                <div class="mb-16">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-8">Featured Projects</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Project Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/project1.jpg') }}" alt="Project Modern Website" class="w-full h-48 object-cover rounded-lg mb-6 border-4 border-accent">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Modern Website</h3>
                            <p class="text-gray-600 mb-4">Design and Development</p>
                            <a href="#" class="text-primary hover:underline text-lg font-medium">View Details</a>
                        </div>

                        <!-- Project Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/project2.jpg') }}" alt="Project Mobile App" class="w-full h-48 object-cover rounded-lg mb-6 border-4 border-accent">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Mobile App</h3>
                            <p class="text-gray-600 mb-4">UI/UX Design and Development</p>
                            <a href="#" class="text-primary hover:underline text-lg font-medium">View Details</a>
                        </div>

                        <!-- Project Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/project3.jpg') }}" alt="Project Marketing Campaign" class="w-full h-48 object-cover rounded-lg mb-6 border-4 border-accent">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Marketing Campaign</h3>
                            <p class="text-gray-600 mb-4">Campaign Management</p>
                            <a href="#" class="text-primary hover:underline text-lg font-medium">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-8">Recent Activity</h2>
                    <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-semibold text-gray-800">Modern Website</p>
                            <span class="text-gray-500 text-sm">5 minutes ago</span>
                        </div>
                        <p class="text-gray-600">Project updated with new features.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-semibold text-gray-800">Mobile App</p>
                            <span class="text-gray-500 text-sm">2 hours ago</span>
                        </div>
                        <p class="text-gray-600">New design mockups submitted.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-semibold text-gray-800">Marketing Campaign</p>
                            <span class="text-gray-500 text-sm">1 day ago</span>
                        </div>
                        <p class="text-gray-600">Campaign metrics updated.</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
