@extends('layouts.app')

@section('title', 'Freelancers | Dashboard')

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
                <h1 class="text-4xl font-bold text-gray-800 mb-12">Freelancers</h1>

                <!-- Search Bar and Filters -->
                <div class="flex flex-col lg:flex-row justify-between items-center mb-10">
                    <input type="text" placeholder="Search freelancers..." class="border border-gray-300 p-4 rounded-lg shadow-lg w-full lg:w-1/2 focus:outline-none focus:ring-2 focus:ring-primary transition-colors duration-300 mb-4 lg:mb-0">
                    
                    <!-- Filters -->
                    <div class="flex space-x-4">
                        <select class="border border-gray-300 p-3 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-primary transition-colors duration-300">
                            <option value="">Sort by</option>
                            <option value="rating">Rating</option>
                            <option value="experience">Experience</option>
                            <option value="price">Price</option>
                        </select>
                        
                        <select class="border border-gray-300 p-3 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-primary transition-colors duration-300">
                            <option value="">Category</option>
                            <option value="design">Design</option>
                            <option value="development">Development</option>
                            <option value="marketing">Marketing</option>
                        </select>
                    </div>
                </div>

                <!-- Featured Freelancers -->
                <div class="mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-8">Featured Freelancers</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Freelancer Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/freelancer1.jpg') }}" alt="Freelancer Alex Johnson" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-accent">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Alex Johnson</h3>
                            <p class="text-gray-600 mb-4">Graphic Designer</p>
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-yellow-400">★★★★☆</span>
                                <span class="text-gray-500 ml-2">(4.8)</span>
                            </div>
                            <a href="#" class="text-primary hover:underline text-lg">View Profile</a>
                        </div>

                        <!-- Freelancer Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/freelancer2.jpg') }}" alt="Freelancer Maria Gonzalez" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-accent">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Maria Gonzalez</h3>
                            <p class="text-gray-600 mb-4">UI/UX Designer</p>
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-yellow-400">★★★★☆</span>
                                <span class="text-gray-500 ml-2">(4.6)</span>
                            </div>
                            <a href="#" class="text-primary hover:underline text-lg">View Profile</a>
                        </div>

                        <!-- Freelancer Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/freelancer3.jpg') }}" alt="Freelancer Liam Brown" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-accent">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Liam Brown</h3>
                            <p class="text-gray-600 mb-4">Full Stack Developer</p>
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-gray-500 ml-2">(5.0)</span>
                            </div>
                            <a href="#" class="text-primary hover:underline text-lg">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Projects -->
                <div class="mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-8">Featured Projects</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Project Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Redesigning E-commerce Site</h3>
                            <p class="text-gray-600 mb-4">A complete overhaul of an e-commerce website to enhance user experience and visual appeal.</p>
                            <a href="#" class="text-primary hover:underline">View Details</a>
                        </div>

                        <!-- Project Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Mobile App UI/UX Design</h3>
                            <p class="text-gray-600 mb-4">Designing a user-friendly interface for a mobile application to improve user engagement.</p>
                            <a href="#" class="text-primary hover:underline">View Details</a>
                        </div>

                        <!-- Project Card -->
                        <div class="bg-white p-6 rounded-lg shadow-xl">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Corporate Branding Package</h3>
                            <p class="text-gray-600 mb-4">Developing a comprehensive branding package including logo, business cards, and marketing materials.</p>
                            <a href="#" class="text-primary hover:underline">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Testimonials -->
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-8">What Our Clients Say</h2>
                    <div class="space-y-8">
                        <!-- Testimonial -->
                        <div class="bg-white p-6 rounded-lg shadow-xl">
                            <p class="text-gray-600 mb-4">“Working with Alex was a fantastic experience. His creativity and dedication truly made a difference in our project.”</p>
                            <p class="font-semibold text-gray-800">Sarah Lee</p>
                            <p class="text-gray-500">CEO, Creative Solutions</p>
                        </div>

                        <!-- Testimonial -->
                        <div class="bg-white p-6 rounded-lg shadow-xl">
                            <p class="text-gray-600 mb-4">“Maria's UI/UX design skills are top-notch. She delivered exactly what we needed on time and within budget.”</p>
                            <p class="font-semibold text-gray-800">John Smith</p>
                            <p class="text-gray-500">Project Manager, Tech Innovations</p>
                        </div>

                        <!-- Testimonial -->
                        <div class="bg-white p-6 rounded-lg shadow-xl">
                            <p class="text-gray-600 mb-4">“Liam's expertise as a Full Stack Developer was crucial for our website's development. Highly recommend his services.”</p>
                            <p class="font-semibold text-gray-800">Emily Davis</p>
                            <p class="text-gray-500">Founder, Digital Ventures</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
