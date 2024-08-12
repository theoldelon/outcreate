@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 mt-24">
        <!-- Navigation -->
        <nav class="flex space-x-6 mb-6 border-b border-gray-200 pb-2">
            <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Profile</a>
            <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Billing</a>
            <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Security</a>
            <a class="text-gray-600 hover:text-primary font-semibold transition duration-300" href="#">Notifications</a>
        </nav>
    <!-- Profile Overview -->
    <div class="flex flex-wrap -mx-4">
        <!-- Profile Picture and Basic Info -->
        <div class="w-full md:w-1/4 px-4 mb-8">
            <div class="bg-white shadow-xl rounded-xl p-6">
                <!-- Profile Picture -->
                <div class="flex flex-col items-center">
                    <div class="relative">
                        <img class="w-36 h-36 rounded-full border-4 border-gradient mb-4" src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Profile Picture">
                        <span class="absolute bottom-0 right-0 bg-primary rounded-full p-1">
                            <i class="fa-solid fa-camera text-white"></i>
                        </span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ auth()->user()->name }}</h2>
                    <p class="text-gray-500 text-sm mb-4">{{ auth()->user()->title ?? 'Freelancer' }}</p>
                    <a href="{{ route('profile.edit') }}" class="bg-primary text-white px-6 py-3 rounded-full shadow-lg hover:bg-primary-dark transition duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-pencil-alt mr-2"></i> Edit Profile
                    </a>
                    
                </div>
            </div>
        </div>
        

        <!-- Profile Details and Stats -->
        <div class="w-full md:w-3/4 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="flex flex-wrap p-6 border-b border-gray-200">
                    <!-- Freelancer Details -->
                    <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
                        <h3 class="text-lg font-semibold mb-4">Freelancer Details</h3>
                        <div class="space-y-4 text-gray-700">
                            <p><strong>Username:</strong> {{ auth()->user()->username }}</p>
                            <p><strong>Full Name:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                            <p><strong>Organization:</strong> {{ auth()->user()->organization_name }}</p>
                            <p><strong>Location:</strong> {{ auth()->user()->location }}</p>
                            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                            <p><strong>Phone:</strong> {{ auth()->user()->phone }}</p>
                            <p><strong>Birthday:</strong> {{ auth()->user()->birthday }}</p>
                            <p><strong>Hourly Rate:</strong> $50/hr</p>
                        </div>
                    </div>
                    <!-- Skills -->
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-lg font-semibold mb-4">Skills</h3>
                        <div class="space-y-2">
                            @foreach (['Web Development', 'Graphic Design', 'SEO'] as $skill)
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Projects -->
            <div class="bg-white shadow-lg rounded-lg mt-6">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Recent Projects</h3>
                    <ul class="space-y-6">
                        @foreach (['Project Title 1', 'Project Title 2', 'Project Title 3'] as $project)
                        <li class="border-b pb-4">
                            <h4 class="text-primary text-xl font-semibold mb-2">{{ $project }}</h4>
                            <p class="text-gray-600 mb-2">A brief description of the project. This summary highlights the project’s objectives and outcomes.</p>
                            <a href="#" class="text-primary hover:underline">View Details</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Client Feedback -->
            <div class="bg-white shadow-lg rounded-lg mt-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Client Feedback</h3>
                    <ul class="space-y-6">
                        @foreach (['Client Name 1' => 'Excellent work on the recent project. Delivered on time and exceeded expectations.', 'Client Name 2' => 'Great communication and high-quality work. Would definitely hire again.', 'Client Name 3' => 'Very professional and delivered exactly what was needed. Highly recommend.'] as $client => $feedback)
                        <li class="border-b pb-4">
                            <h4 class="text-primary text-xl font-semibold mb-2">{{ $client }}</h4>
                            <p class="text-gray-600 mb-2">"{{ $feedback }}"</p>
                            <span class="text-yellow-500">Rating: ★★★★★</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
