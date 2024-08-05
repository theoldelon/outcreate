@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-green-100 via-blue-100 to-purple-100">
    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-xl">
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
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">{{ __('Register') }}</h2>

        <form method="POST" action="{{ route('register.post') }}">
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Name') }}</label>
                <input id="name" type="text" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Password') }}</label>
                <input id="password" type="password" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('password') border-red-500 @enderror" name="password" required>
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" name="password_confirmation" required>
            </div>

            <div class="flex items-center justify-between mb-6">
                <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
