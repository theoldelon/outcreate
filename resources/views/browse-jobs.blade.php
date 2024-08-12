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
                <input type="text" placeholder="Search jobs..." class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Search jobs">
            </div>
            <div class="w-full md:w-2/3 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 justify-end">
                <select class="w-48 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Select Category">
                    <option value="">Select Category</option>
                    <option value="web-development">Web Development</option>
                    <option value="design">Design</option>
                    <option value="marketing">Marketing</option>
                </select>
                <select class="w-48 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Select Location">
                    <option value="">Select Location</option>
                    <option value="remote">Remote</option>
                    <option value="new-york">New York</option>
                    <option value="boston">Boston</option>
                </select>
                <select class="w-48 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Select Job Type">
                    <option value="">Select Job Type</option>
                    <option value="full-time">Full-time</option>
                    <option value="part-time">Part-time</option>
                    <option value="contract">Contract</option>
                </select>
                <button class="w-48 px-4 py-2 bg-primary text-white rounded-lg shadow-sm hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">
                    Apply Filters
                </button>
            </div>
        </div>

        <!-- Jobs List -->
        <ul class="space-y-4">
            <!-- Example Job Listing 1 -->
            <a href="#" class="block bg-white p-6 rounded-lg shadow-lg transition-shadow duration-300 hover:shadow-2xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/unggoy.jpg') }}" alt="Profile" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-semibold text-gray-800">Lee Goy</p>
                        <p class="text-gray-600 text-sm">Tech Innovations</p>
                    </div>
                </div>
                <img src="{{ asset('images/Home.jpg') }}" alt="Senior Frontend Developer" class="w-full h-40 object-cover rounded-lg mb-4">
                <p class="block text-2xl font-semibold text-primary">
                    Senior Frontend Developer
                </p>
                <p class="text-gray-600 mt-2">Remote</p>
                <p class="text-gray-600 mt-2">Web Development</p>
                <div class="mt-4 flex items-center space-x-4">
                    <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">Full-time</span>
                    <span class="text-gray-500 text-sm">Aug 01, 2024</span>
                </div>
                <p class="mt-4">We are looking for a skilled Senior Frontend Developer with experience in React and Tailwind CSS to join our team and work on innovative projects.</p>
            </a>

            <!-- Example Job Listing 2 -->
            <a href="#" class="block bg-white p-6 rounded-lg shadow-lg transition-shadow duration-300 hover:shadow-2xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/profile2.jpg') }}" alt="Profile" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-semibold text-gray-800">Jane Smith</p>
                        <p class="text-gray-600 text-sm">Creative Agency</p>
                    </div>
                </div>
                <img src="{{ asset('images/job2.jpg') }}" alt="Graphic Designer" class="w-full h-40 object-cover rounded-lg mb-4">
                <p class="block text-2xl font-semibold text-primary">
                    Graphic Designer
                </p>
                <p class="text-gray-600 mt-2">New York</p>
                <p class="text-gray-600 mt-2">Design</p>
                <div class="mt-4 flex items-center space-x-4">
                    <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">Part-time</span>
                    <span class="text-gray-500 text-sm">Jul 29, 2024</span>
                </div>
                <p class="mt-4">Join our team as a Graphic Designer and contribute to creative projects with your design skills. Experience with Adobe Creative Suite is a must.</p>
            </a>

            <!-- Example Job Listing 3 -->
            <a href="#" class="block bg-white p-6 rounded-lg shadow-lg transition-shadow duration-300 hover:shadow-2xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/profile3.jpg') }}" alt="Profile" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-semibold text-gray-800">Mike Johnson</p>
                        <p class="text-gray-600 text-sm">Marketing Experts</p>
                    </div>
                </div>
                <img src="{{ asset('images/job3.jpg') }}" alt="Digital Marketer" class="w-full h-40 object-cover rounded-lg mb-4">
                <p class="block text-2xl font-semibold text-primary">
                    Digital Marketer
                </p>
                <p class="text-gray-600 mt-2">Boston</p>
                <p class="text-gray-600 mt-2">Marketing</p>
                <div class="mt-4 flex items-center space-x-4">
                    <span class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full text-sm">Contract</span>
                    <span class="text-gray-500 text-sm">Jul 25, 2024</span>
                </div>
                <p class="mt-4">We are seeking a Digital Marketer to develop and execute marketing strategies. Experience with SEO, PPC, and content marketing is required.</p>
            </a>
        </ul>

    </main>
</div>
@endsection

@section('scripts')
<!-- Add any additional scripts here -->
@endsection
