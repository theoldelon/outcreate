@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-green-100 via-blue-100 to-purple-100">
    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-xl border border-gray-200">
        @if (session()->has('success'))
            <div class="mb-4 text-sm text-green-600 bg-green-100 p-4 rounded-md">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="mb-4 text-sm text-red-600 bg-red-100 p-4 rounded-md">
                {{ session()->get('error') }}
            </div>
        @endif

        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Create Your Account</h2>

        <div class="flex justify-center space-x-4 mb-6">
            <button id="clientBtn" class="bg-blue-900 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Register as Client
            </button>
            <button id="freelancerBtn" class="bg-blue-900 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Register as Freelancer
            </button>
        </div>

        <!-- Client Registration Form -->
        <div id="clientForm" class="hidden">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Client Registration</h3>
            <form method="POST" action="{{ route('register.client.post') }}">
                @csrf

                <div class="mb-5">
                    <label for="client_name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input id="client_name" type="text" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="client_email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input id="client_email" type="email" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="client_password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input id="client_password" type="password" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror" name="password" required>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="client_password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <input id="client_password_confirmation" type="password" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" name="password_confirmation" required>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <button type="submit" class="w-full py-3 px-4 bg-blue-900 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        Register as Client
                    </button>
                </div>
            </form>
        </div>

        <!-- Freelancer Registration Form -->
        <div id="freelancerForm" class="hidden">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Freelancer Registration</h3>
            <form method="POST" action="{{ route('register.freelancer.post') }}">        
                @csrf
        
                <div class="mb-5">
                    <label for="freelancer_name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input id="freelancer_name" type="text" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-5">
                    <label for="freelancer_email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input id="freelancer_email" type="email" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-5">
                    <label for="freelancer_password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input id="freelancer_password" type="password" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror" name="password" required>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-5">
                    <label for="freelancer_password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <input id="freelancer_password_confirmation" type="password" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" name="password_confirmation" required>
                </div>
        
                <div class="flex items-center justify-between mb-6">
                    <button type="submit" class="w-full py-3 px-4 bg-blue-900 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        Register as Freelancer
                    </button>
                </div>
            </form>
        </div>
        

        <div class="text-center mt-8 text-gray-600">
            <p>By creating an account, you agree to our <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const clientBtn = document.getElementById('clientBtn');
        const freelancerBtn = document.getElementById('freelancerBtn');
        const clientForm = document.getElementById('clientForm');
        const freelancerForm = document.getElementById('freelancerForm');

        clientBtn.addEventListener('click', () => {
            clientForm.classList.remove('hidden');
            freelancerForm.classList.add('hidden');
        });

        freelancerBtn.addEventListener('click', () => {
            freelancerForm.classList.remove('hidden');
            clientForm.classList.add('hidden');
        });
    });
</script>
@endsection
