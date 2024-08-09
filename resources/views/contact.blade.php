@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mx-auto py-24">
    <h1 class="text-5xl font-extrabold mb-16 text-center text-blue-900 mt-12">Get in Touch</h1>

    <div class="max-w-2xl mx-auto bg-white p-12 rounded-xl shadow-lg min-h-[700px] flex flex-col justify-between">
        <div class="mb-12">
            <p class="text-lg text-blue-800 mb-10 text-center">We're here to help! Please fill out the form below, and we'll get back to you as soon as possible.</p>
        
            <form action="post" method="POST" class="space-y-8">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-blue-800 mb-2">Your Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="py-4 px-4 mt-1 block w-full rounded-lg border-blue-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-blue-800 mb-2">Your Email</label>
                    <input type="email" name="email" id="email" placeholder="you@example.com" class="py-4 px-4 mt-1 block w-full rounded-lg border-blue-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-medium text-blue-800 mb-2">Your Message</label>
                    <textarea name="message" id="message" rows="6" placeholder="Type your message here..." class="py-4 px-4 mt-1 block w-full rounded-lg border-blue-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required></textarea>
                </div>

                <div class="text-center mt-8">
                    <button type="submit" class="inline-flex items-center justify-center py-3 px-6 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-transform transform hover:scale-105">
                        <span class="mr-2">Send Message</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26c.37.25.82.25 1.18 0L21 8m-18 8l7.89-5.26c.37-.25.82-.25 1.18 0L21 16m0-12a2 2 0 012 2v12a2 2 0 01-2 2H3a2 2 0 01-2-2V6a2 2 0 012-2h18z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        
        <div class="text-center text-blue-900">
            <p class="text-lg font-semibold">Our Address</p>
            <p class="text-sm text-blue-800">123 Blue Street, Suite 456<br>City, State, 78910</p>
            <p class="text-lg font-semibold mt-6">Call Us</p>
            <p class="text-sm text-blue-800">(123) 456-7890</p>
            <p class="text-lg font-semibold mt-6">Email Us</p>
            <p class="text-sm text-blue-800">contact@example.com</p>
        </div>
    </div>
</div>
@endsection
