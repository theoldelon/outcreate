@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 mt-24">
    <!-- Navigation -->
    <nav class="flex space-x-6 mb-8 border-b border-gray-300 pb-2">
        <a class="text-gray-700 hover:text-primary font-semibold transition duration-300" href="#">Profile</a>
        <a class="text-gray-700 hover:text-primary font-semibold transition duration-300" href="#">Billing</a>
        <a class="text-gray-700 hover:text-primary font-semibold transition duration-300" href="#">Security</a>
        <a class="text-gray-700 hover:text-primary font-semibold transition duration-300" href="#">Notifications</a>
    </nav>

    <!-- Profile Overview -->
    <div class="flex flex-wrap -mx-4">
        <!-- Profile Picture and Basic Info -->
        <div class="w-full md:w-1/4 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <!-- Profile Picture -->
                <div class="flex flex-col items-center">
                    <div class="relative">
                        <img class="w-32 h-32 rounded-full border-4 border-primary mb-4" src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Profile Picture">
                        <span class="absolute bottom-0 right-0 bg-primary rounded-full p-2">
                            <i class="fa-solid fa-camera text-white"></i>
                        </span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ auth()->user()->name }}</h2>
                    <p class="text-gray-600 text-sm mb-4">{{ auth()->user()->position ?? 'Freelancer' }}</p>
                    <a href="#" class="bg-primary text-white px-5 py-2 rounded-full shadow-md hover:bg-primary-dark transition duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-pencil-alt mr-2"></i> Edit Profile
                    </a>
                </div>
            </div>
        </div>

        <!-- Freelancer Details -->
        <div class="w-full md:w-3/4 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-6">Freelancer Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                    <div>
                        <p class="font-medium mb-2"><strong>Position:</strong></p>
                        <p>{{ auth()->user()->position }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Introduction:</strong></p>
                        <p>{{ auth()->user()->introduction }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Hourly Rate:</strong></p>
                        <p>${{ auth()->user()->hourlyRate }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Resume:</strong></p>
                        <p>{{ auth()->user()->resume }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Diploma:</strong></p>
                        <p>{{ auth()->user()->diploma }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Certificate:</strong></p>
                        <p>{{ auth()->user()->certificate }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Reference Name:</strong></p>
                        <p>{{ auth()->user()->referenceName }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Reference Email:</strong></p>
                        <p>{{ auth()->user()->referenceEmail }}</p>
                    </div>
                    <div>
                        <p class="font-medium mb-2"><strong>Reference Phone:</strong></p>
                        <p>{{ auth()->user()->referencePhone }}</p>
                    </div>
                </div>
            </div>

            <!-- Recent Projects -->
            <div class="bg-white shadow-lg rounded-lg mt-8 p-6">
                <h3 class="text-xl font-semibold mb-6">Recent Projects</h3>
                <ul class="space-y-6">
                    @foreach (['Project Title 1', 'Project Title 2', 'Project Title 3'] as $project)
                    <li class="border-b pb-4">
                        <h4 class="text-primary text-lg font-semibold mb-2">{{ $project }}</h4>
                        <p class="text-gray-600 mb-2">A brief description of the project. This summary highlights the project’s objectives and outcomes.</p>
                        <a href="#" class="text-primary hover:underline">View Details</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Freelancer Feedback -->
            <div class="bg-white shadow-lg rounded-lg mt-8 p-6">
                <h3 class="text-xl font-semibold mb-6">Freelancer Feedback</h3>
                <ul class="space-y-6">
                    @foreach (['Client Name 1' => 'Excellent work on the recent project. Delivered on time and exceeded expectations.', 'Client Name 2' => 'Great communication and high-quality work. Would definitely hire again.', 'Client Name 3' => 'Very professional and delivered exactly what was needed. Highly recommend.'] as $client => $feedback)
                    <li class="border-b pb-4">
                        <h4 class="text-primary text-lg font-semibold mb-2">{{ $client }}</h4>
                        <p class="text-gray-600 mb-2">"{{ $feedback }}"</p>
                        <span class="text-yellow-500">Rating: ★★★★★</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
