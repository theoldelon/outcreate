@extends('layouts.app')

@section('title', 'Browse Jobs')

@section('content')
    <div class="flex">
        <!-- Main Content -->
        <main class="flex-1 p-6 ml-64 mt-24 mx-24 md:mx-48 lg:mx-96">
            <h1 class="text-3xl font-bold text-primary mb-6 border-b border-gray-300 pb-4">Browse Jobs</h1>

            <!-- Search and Filter -->
            <div class="mb-6 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="w-full md:w-1/3">
                    <input type="text" placeholder="Search jobs..." class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="w-full md:w-2/3 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 justify-end">
                    <select class="w-48 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Select Category</option>
                        <option value="web-development">Web Development</option>
                        <option value="design">Design</option>
                        <option value="marketing">Marketing</option>
                    </select>
                    <select class="w-48 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Select Location</option>
                        <option value="remote">Remote</option>
                        <option value="new-york">New York</option>
                        <option value="boston">Boston</option>
                    </select>
                </div>
            </div>

            <!-- Jobs List -->
            <ul class="space-y-4">
                <!-- Example Job Listing 1 -->
                <li class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl duration-300">
                    <a href="#" class="block text-2xl font-semibold text-primary hover:underline">
                        Senior Frontend Developer
                    </a>
                    <p class="text-gray-600 mt-2">Tech Innovations</p>
                    <p class="text-gray-600 mt-2">Remote</p>
                    <p class="text-gray-600 mt-2">Web Development</p>
                    <div class="mt-4 flex items-center space-x-4">
                        <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">Full-time</span>
                        <span class="text-gray-500 text-sm">Aug 01, 2024</span>
                    </div>
                    <p class="mt-4">We are looking for a skilled Senior Frontend Developer with experience in React and Tailwind CSS to join our team and work on innovative projects.</p>
                </li>
    
                <!-- Example Job Listing 2 -->
                <li class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl duration-300">
                    <a href="#" class="block text-2xl font-semibold text-primary hover:underline">
                        Graphic Designer
                    </a>
                    <p class="text-gray-600 mt-2">Creative Agency</p>
                    <p class="text-gray-600 mt-2">New York</p>
                    <p class="text-gray-600 mt-2">Design</p>
                    <div class="mt-4 flex items-center space-x-4">
                        <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">Part-time</span>
                        <span class="text-gray-500 text-sm">Jul 29, 2024</span>
                    </div>
                    <p class="mt-4">Join our team as a Graphic Designer and contribute to creative projects with your design skills. Experience with Adobe Creative Suite is a must.</p>
                </li>
    
                <!-- Example Job Listing 3 -->
                <li class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl duration-300">
                    <a href="#" class="block text-2xl font-semibold text-primary hover:underline">
                        Digital Marketer
                    </a>
                    <p class="text-gray-600 mt-2">Marketing Experts</p>
                    <p class="text-gray-600 mt-2">Boston</p>
                    <p class="text-gray-600 mt-2">Marketing</p>
                    <div class="mt-4 flex items-center space-x-4">
                        <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">Contract</span>
                        <span class="text-gray-500 text-sm">Jul 25, 2024</span>
                    </div>
                    <p class="mt-4">We are seeking a Digital Marketer to develop and execute marketing strategies. Experience with SEO, PPC, and content marketing is required.</p>
                </li>
            </ul>     
        </main>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');

            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('-translate-x-full');
                    sidebar.classList.toggle('translate-x-0');
                });
            }
        });
    </script>
@endsection
