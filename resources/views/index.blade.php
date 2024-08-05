@extends('layouts.app')

@section('title', 'Home | OutCreate')

@section('content')

<!-- Hero Section -->
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-900 via-blue-600 to-blue-900 h-96 flex items-center justify-center text-center text-light">
    <div>
        <h1 class="text-4xl font-bold leading-tight mb-4">
            Connect with the Best Freelancers
        </h1>
        <p class="text-xl mb-6">
            Find the perfect talent for your project
        </p>
        <div class="mb-8 space-x-4">
            @auth
            <a href="" class="bg-gray-900 text-light px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300">Find a Job</a>
            <a href="" class="bg-blue-900 text-light px-6 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-300">Post a Job</a>
            @else
            <a href="{{ url('/login') }}" class="bg-blue-600 text-light px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors duration-300">Login to connect!</a>
            @endauth
        </div>
    </div>
</section>


<!-- How It Works Section -->
<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-primary">How It Works</h2>
    <div class="flex justify-around">
        <div class="text-center">
            <div class="bg-primary text-light w-16 h-16 flex items-center justify-center rounded-full mx-auto">1</div>
            <h3 class="mt-4 font-semibold text-secondary">Post a Job</h3>
            <p class="mt-2 text-secondary">Describe your project and needs</p>
        </div>
        <div class="text-center">
            <div class="bg-primary text-light w-16 h-16 flex items-center justify-center rounded-full mx-auto">2</div>
            <h3 class="mt-4 font-semibold text-secondary">Find Freelancers</h3>
            <p class="mt-2 text-secondary">Browse through profiles and proposals</p>
        </div>
        <div class="text-center">
            <div class="bg-primary text-light w-16 h-16 flex items-center justify-center rounded-full mx-auto">3</div>
            <h3 class="mt-4 font-semibold text-secondary">Hire the Best</h3>
            <p class="mt-2 text-secondary">Choose the perfect freelancer for your project</p>
        </div>
    </div>
</section>

<!-- Featured Freelancers Section -->
<section class="bg-accent py-16">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8 text-primary">Featured Freelancers</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Freelancer Profile Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center transform hover:scale-105 hover:bg-hover-primary transition-transform duration-300">
                <img src="{{ asset('images/unggoy.jpg') }}" alt="Freelancer 1" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="font-semibold text-primary">Lance Repollo</h3>
                <p class="text-secondary">Web Developer</p>
                <div class="mt-4">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-secondary">(5.0)</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center transform hover:scale-105 hover:bg-hover-primary transition-transform duration-300">
                <img src="{{ asset('images/unggoy.jpg') }}" alt="Freelancer 2" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="font-semibold text-primary">Dan Rixter</h3>
                <p class="text-secondary">Web Developer</p>
                <div class="mt-4">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-secondary">(5.0)</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center transform hover:scale-105 hover:bg-hover-primary transition-transform duration-300">
                <img src="{{ asset('images/unggoy.jpg') }}" alt="Freelancer 3" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="font-semibold text-primary">Jean Paca</h3>
                <p class="text-secondary">Web Developer</p>
                <div class="mt-4">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-secondary">(5.0)</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center transform hover:scale-105 hover:bg-hover-primary transition-transform duration-300">
                <img src="{{ asset('images/unggoy.jpg') }}" alt="Freelancer 4" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="font-semibold text-primary">Jeremy Taraya</h3>
                <p class="text-secondary">Web Developer</p>
                <div class="mt-4">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-secondary">(5.0)</span>
                </div>
            </div>
            <!-- Repeat for more freelancer profile cards -->
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-primary">Featured Projects</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project Card -->
        <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:bg-hover-primary transition-transform duration-300">
            <div class="overflow-hidden rounded-lg shadow-lg mb-4">
                <img src="{{ asset('images/home.jpg') }}" alt="Project 1" class="w-full h-48 object-cover">
            </div>
            <h3 class="font-semibold text-primary">E-commerce Website</h3>
            <p class="mt-2 text-secondary">Budget: $5000</p>
            <p class="mt-2 text-secondary">Description: Create a modern e-commerce website...</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:bg-hover-primary transition-transform duration-300">
            <div class="overflow-hidden rounded-lg shadow-lg mb-4">
                <img src="{{ asset('images/home.jpg') }}" alt="Project 2" class="w-full h-48 object-cover">
            </div>
            <h3 class="font-semibold text-primary">E-commerce Website</h3>
            <p class="mt-2 text-secondary">Budget: $5000</p>
            <p class="mt-2 text-secondary">Description: Create a modern e-commerce website...</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:bg-hover-primary transition-transform duration-300">
            <div class="overflow-hidden rounded-lg shadow-lg mb-4">
                <img src="{{ asset('images/home.jpg') }}" alt="Project 3" class="w-full h-48 object-cover">
            </div>
            <h3 class="font-semibold text-primary">E-commerce Website</h3>
            <p class="mt-2 text-secondary">Budget: $5000</p>
            <p class="mt-2 text-secondary">Description: Create a modern e-commerce website...</p>
        </div>
        <!-- Repeat for more project cards -->
    </div>
</section>

<!-- Testimonials Section -->
<section class="bg-accent py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12 text-primary">What Our Clients Say</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial Card -->
            <div class="bg-white p-8 rounded-lg shadow-lg text-center transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                <p class="text-secondary text-lg italic">"FreelanceConnect helped me find the perfect developer for my project. Highly recommend!"</p>
                <div class="mt-6">
                    <img src="{{ asset('images/monkey.jpg') }}" alt="Client 1" class="w-20 h-20 rounded-full mx-auto mb-4 shadow-md">
                    <h3 class="font-semibold text-primary text-lg hover:underline mt-2">Jane Smith</h3>
                    <p class="text-secondary text-sm">Client</p>
                </div>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                <p class="text-secondary text-lg italic">"The platform is easy to use, and I found amazing freelancers quickly. Great experience!"</p>
                <div class="mt-6">
                    <img src="{{ asset('images/monkey.jpg') }}" alt="Client 2" class="w-20 h-20 rounded-full mx-auto mb-4 shadow-md">
                    <h3 class="font-semibold text-primary text-lg hover:underline mt-2">John Doe</h3>
                    <p class="text-secondary text-sm">Client</p>
                </div>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                <p class="text-secondary text-lg italic">"I was impressed by the quality of work and the ease of finding the right freelancer for my needs."</p>
                <div class="mt-6">
                    <img src="{{ asset('images/monkey.jpg') }}" alt="Client 3" class="w-20 h-20 rounded-full mx-auto mb-4 shadow-md">
                    <h3 class="font-semibold text-primary text-lg hover:underline mt-2">Emily Johnson</h3>
                    <p class="text-secondary text-sm">Client</p>
                </div>
            </div>
            <!-- Repeat for more testimonials -->
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-light py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6 text-primary">Ready to Start Your Project?</h2>
        <p class="text-secondary mb-8">Join us today and connect with top talent or find exciting job opportunities.</p>
        <a href="" class="bg-secondary text-light px-8 py-4 rounded-lg hover:bg-hover-primary transition-colors duration-300">Get Started</a>
    </div>
</section>

@endsection
