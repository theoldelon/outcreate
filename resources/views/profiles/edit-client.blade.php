@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 mt-12">
    <!-- Navigation -->
    <nav class="flex space-x-6 mb-8 border-b border-gray-200 pb-4">
        <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Profile</a>
        <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Billing</a>
        <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Security</a>
        <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Notifications</a>
    </nav>

    <div class="flex flex-wrap -mx-4">
        <!-- Profile Picture and Upload Form -->
        <div class="w-full md:w-1/3 px-4 mb-8">
            <div class="bg-white shadow-xl rounded-lg p-6 flex flex-col items-center">
                <!-- Profile Picture -->
                <div class="relative mb-4">
                    <img class="w-32 h-32 rounded-full border-4 border-primary" src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : 'http://bootdey.com/img/Content/avatar/avatar2.png' }}" alt="Profile Picture">
                    <span class="absolute bottom-0 right-0 bg-primary rounded-full p-2 cursor-pointer">
                        <i class="fa-solid fa-camera text-white"></i>
                    </span>
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ auth()->user()->name }}</h2>
                <p class="text-gray-600 text-sm mb-4">{{ auth()->user()->title ?? 'Freelancer' }}</p>
                <form action="" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    @method('PUT')
                    <input class="form-control mb-4 border-gray-300 rounded-md shadow-sm h-10 focus:ring-primary focus:border-primary w-full" id="inputProfilePicture" type="file" name="profile_picture">
                    <button class="bg-primary text-white px-4 py-2 rounded-md shadow-md hover:bg-primary-dark transition duration-300 w-full" type="submit">Upload new image</button>
                </form>
                <div class="mt-6">
                    <a href="{{ route('profile') }}" class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition duration-300">
                        <i class="fa-solid fa-arrow-left mr-2"></i> Back
                    </a>
                </div>
            </div>
        </div>

        <!-- Account Details -->
        <div class="w-full md:w-2/3 px-4">
            <div class="bg-white shadow-xl rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800">Account Details</h3>
                </div>
                <div class="px-6 py-4">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Username -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputUsername">Username</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputUsername" type="text" name="username" value="{{ old('username', auth()->user()->username) }}" required>
                        </div>

                        <!-- Full Name -->
                        <div class="mb-4 flex flex-wrap -mx-2">
                            <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="inputFirstName">First name</label>
                                <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputFirstName" type="text" name="first_name" value="{{ old('first_name', auth()->user()->first_name) }}" required>
                            </div>
                            <div class="w-full md:w-1/2 px-2">
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="inputLastName">Last name</label>
                                <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputLastName" type="text" name="last_name" value="{{ old('last_name', auth()->user()->last_name) }}" required>
                            </div>
                        </div>

                        <!-- Organization -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputOrgName">Organization</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputOrgName" type="text" name="organization_name" value="{{ old('organization_name', auth()->user()->organization_name) }}">
                        </div>

                        <!-- Location -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputLocation">Location</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputLocation" type="text" name="location" value="{{ old('location', auth()->user()->location) }}">
                        </div>

                        <!-- Email Address -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputEmailAddress">Email</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputEmailAddress" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputPhone">Phone</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputPhone" type="tel" name="phone" value="{{ old('phone', auth()->user()->phone) }}">
                        </div>

                        <!-- Birthday -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputBirthday">Birthday</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputBirthday" type="date" name="birthday" value="{{ old('birthday', auth()->user()->birthday) }}">
                        </div>

                        <!-- Skills -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputSkills">Skills</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputSkills" type="text" name="skills" value="{{ old('skills', auth()->user()->skills) }}" placeholder="Web Development, Graphic Design, SEO">
                        </div>

                        <!-- Hourly Rate -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="inputHourlyRate">Hourly Rate</label>
                            <input class="form-control border-gray-300 rounded-md shadow-sm h-12 focus:ring-primary focus:border-primary w-full" id="inputHourlyRate" type="text" name="hourly_rate" value="{{ old('hourly_rate', auth()->user()->hourly_rate) }}" placeholder="$50/hr">
                        </div>

                        <!-- Submit Button -->
                        <button class="bg-primary text-white px-6 py-2 rounded-md shadow-md hover:bg-primary-dark transition duration-300 w-full" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
