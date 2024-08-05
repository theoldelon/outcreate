@extends('layouts.app')

@section('title', 'Messages | OutCreate')

@section('content')

<!-- Sidebar Toggle Button -->
<button id="sidebarToggle" class="fixed top-4 left-4 z-50 text-light p-3 rounded-lg shadow-lg hover:bg-secondary transition-colors duration-300">
    <i class="fas fa-bars fa-lg"></i>
</button>

@include('components.sidebar')

<!-- Main Content -->
<main class="ml-64 p-6 bg-gray-100 min-h-screen">

    <!-- Messages Section -->
    <section class="container mx-auto py-16 px-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-4xl font-bold text-primary mb-8">Messages</h2>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Message Threads -->
            <div class="bg-white p-6 rounded-lg shadow-lg flex-1 lg:w-1/3">
                <h3 class="text-2xl font-semibold text-primary mb-4">Conversations</h3>
                <ul class="space-y-4">
                    <!-- Conversation Item -->
                    <li class="flex items-center space-x-4 border-b border-gray-200 pb-4">
                        <img src="{{ asset('images/avatar.jpg') }}" alt="User" class="w-12 h-12 rounded-full shadow-md object-cover">
                        <div>
                            <h4 class="text-lg font-semibold text-primary">Jane Smith</h4>
                            <p class="text-gray-600">Last message preview or recent activity...</p>
                        </div>
                    </li>
                    <!-- Repeat for more conversations -->
                </ul>
            </div>

            <!-- Active Conversation -->
            <div class="bg-white p-6 rounded-lg shadow-lg flex-1 lg:w-2/3">
                <h3 class="text-2xl font-semibold text-primary mb-4">Conversation with John Doe</h3>
                <div class="space-y-4">
                    <!-- Message Item -->
                    <div class="flex items-start space-x-4">
                        <img src="{{ asset('images/client1.jpg') }}" alt="Sender" class="w-12 h-12 rounded-full shadow-md object-cover">
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <p class="text-gray-800">Hi, I wanted to discuss the project updates. Can we schedule a call?</p>
                            <span class="text-xs text-gray-500">12:34 PM</span>
                        </div>
                    </div>
                    <!-- Message Item -->
                    <div class="flex items-start space-x-4">
                        <img src="{{ asset('images/avatar.jpg') }}" alt="Receiver" class="w-12 h-12 rounded-full shadow-md object-cover">
                        <div class="bg-blue-300 text-dark p-4 rounded-lg">
                            <p>Sure, I'm available tomorrow at 10 AM. Let me know if that works for you.</p>
                            <span class="text-xs text-light">12:35 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Send Message Form -->
        <div class="bg-white p-6 rounded-lg shadow-lg mt-8">
            <h3 class="text-2xl font-semibold text-primary mb-4">Send a New Message</h3>
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="recipient" class="block text-gray-700 mb-2">Recipient</label>
                    <input type="text" id="recipient" name="recipient" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Recipient's name or email" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Type your message here" required></textarea>
                </div>
                <button type="submit" class="bg-primary text-light px-6 py-3 rounded-lg hover:bg-secondary transition-colors duration-300">Send Message</button>
            </form>
        </div>
    </section>
</main>

@endsection
