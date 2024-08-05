@extends('layouts.app')

@section('title', 'Services')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center mb-8 mt-24">Services</h1>
    
    <div class="text-center mb-12">
        <p class="text-lg text-gray-700">
            Discover the range of services we offer to help your business thrive. Our team is dedicated to providing high-quality solutions tailored to your needs.
        </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-semibold mb-4">Web Development</h2>
            <p class="text-gray-700 mb-4">
                We build custom websites that are not only visually appealing but also highly functional and user-friendly. Our web development services include front-end and back-end development, CMS integration, and more.
            </p>
            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
        </div>
        
        <!-- Service 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-semibold mb-4">Digital Marketing</h2>
            <p class="text-gray-700 mb-4">
                Our digital marketing services are designed to help you reach your target audience effectively. We offer SEO, PPC advertising, social media management, and content marketing strategies to boost your online presence.
            </p>
            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
        </div>
        
        <!-- Service 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-semibold mb-4">Graphic Design</h2>
            <p class="text-gray-700 mb-4">
                Our graphic design services focus on creating stunning visuals that communicate your brand’s message. From logo design to marketing materials, we provide creative solutions that stand out.
            </p>
            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
        </div>

        <!-- Service 4 -->
        <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-semibold mb-4">Consulting Services</h2>
            <p class="text-gray-700 mb-4">
                Our consulting services help you navigate complex business challenges and make informed decisions. We offer expertise in strategy, operations, and technology to drive your business forward.
            </p>
            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
        </div>

        <!-- Service 5 -->
        <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-semibold mb-4">Customer Support</h2>
            <p class="text-gray-700 mb-4">
                We provide exceptional customer support to ensure your satisfaction. Our team is available to assist with inquiries, resolve issues, and provide guidance throughout your journey with us.
            </p>
            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
        </div>
        
        <!-- Service 6 -->
        <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-semibold mb-4">Mobile App Development</h2>
            <p class="text-gray-700 mb-4">
                Our mobile app development services cater to both iOS and Android platforms. We design and develop apps that provide a seamless user experience and meet your specific business requirements.
            </p>
            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
        </div>
    </div>
</div>
@endsection
