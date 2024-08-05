@extends('layouts.app')

@section('title', 'Clients | OutCreate')

@section('content')

<!-- Sidebar Toggle Button -->
<button id="sidebarToggle" class="fixed top-4 left-4 z-50 text-light p-3 rounded-lg shadow-lg hover:bg-secondary transition-colors duration-300">
    <i class="fas fa-bars fa-lg"></i>
</button>

@include('components.sidebar')

<!-- Clients Section -->
<section class="container mx-auto py-16 px-6">
    <h2 class="text-3xl font-bold text-primary mb-8 mt-12">Our Clients</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Client Card -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <img src="{{ asset('images/client1.jpg') }}" alt="Client 1" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md object-cover">
            <h3 class="text-xl font-semibold text-primary mb-2">John Doe</h3>
            <p class="text-secondary mb-2">CEO, Company One</p>
            <p class="text-gray-600 mb-4">John has been an essential part of our network, providing valuable insights and feedback on our projects.</p>
            <a href="#" class="text-accent hover:underline">Read More</a>
        </div>
        <!-- Repeat for more clients -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <img src="{{ asset('images/client2.jpg') }}" alt="Client 2" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md object-cover">
            <h3 class="text-xl font-semibold text-primary mb-2">Jane Smith</h3>
            <p class="text-secondary mb-2">CTO, Company Two</p>
            <p class="text-gray-600 mb-4">Jane's expertise and leadership have greatly contributed to the success of our collaborative projects.</p>
            <a href="#" class="text-accent hover:underline">Read More</a>
        </div>
        <!-- Add more client cards as needed -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <img src="{{ asset('images/client3.jpg') }}" alt="Client 3" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md object-cover">
            <h3 class="text-xl font-semibold text-primary mb-2">Alice Johnson</h3>
            <p class="text-secondary mb-2">Marketing Director, Company Three</p>
            <p class="text-gray-600 mb-4">Alice's collaboration has been invaluable in developing and executing marketing strategies that drive results.</p>
            <a href="#" class="text-accent hover:underline">Read More</a>
        </div>
    </div>
</section>

<!-- Client Testimonials Section -->
<section class="bg-gray-50 py-16 px-6">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8 text-primary">What Our Clients Say</h2>
        <div class="flex flex-col lg:flex-row lg:justify-between gap-8">
            <!-- Testimonial Card -->
            <div class="bg-white p-8 rounded-lg shadow-lg text-center transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                <p class="text-secondary text-lg italic mb-6">"The team at OutCreate exceeded our expectations. Their dedication and expertise were evident throughout the project."</p>
                <div class="mt-6">
                    <img src="{{ asset('images/testimonial1.jpg') }}" alt="Client 1" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="font-semibold text-primary text-lg hover:underline mt-2">Michael Brown</h3>
                    <p class="text-secondary text-sm">Founder, Innovative Solutions</p>
                </div>
            </div>
            <!-- Repeat for more testimonials -->
            <div class="bg-white p-8 rounded-lg shadow-lg text-center transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                <p class="text-secondary text-lg italic mb-6">"OutCreate's team was fantastic to work with. They delivered high-quality work and were always responsive to our needs."</p>
                <div class="mt-6">
                    <img src="{{ asset('images/testimonial2.jpg') }}" alt="Client 2" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="font-semibold text-primary text-lg hover:underline mt-2">Emily White</h3>
                    <p class="text-secondary text-sm">Project Manager, NextGen Corp</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 px-6">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-primary mb-6">Get in Touch with Us</h2>
        <p class="text-lg mb-8">Have any questions or want to discuss potential collaborations? Reach out to us, and we'll get back to you as soon as possible.</p>
        <a href="mailto:contact@outcreate.com" class="bg-primary text-light px-6 py-3 rounded hover:bg-secondary transition-colors duration-300">Contact Us</a>
    </div>
</section>

@endsection
