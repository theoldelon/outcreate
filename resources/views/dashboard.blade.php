@extends('layouts.app')

@section('title', 'Dashboard | FreelanceConnect')

@section('content')
    <div class="flex">
        <!-- Sidebar Toggle Button -->
        <button id="sidebarToggle" class="fixed top-4 left-4 z-50 text-light p-3 rounded-lg shadow-lg hover:bg-secondary transition-colors duration-300">
            <i class="fas fa-bars fa-lg"></i>
        </button>

        @include('components.sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6 ml-64 mt-24">
            <h1 class="text-3xl font-bold text-primary mb-6">Welcome to Your Dashboard</h1>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <h3 class="text-xl font-semibold text-primary mb-2">Total Projects</h3>
                    <p class="text-4xl font-bold text-secondary">150</p>
                    <p class="text-gray-500 mt-2">Projects completed and ongoing</p>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <h3 class="text-xl font-semibold text-primary mb-2">Active Freelancers</h3>
                    <p class="text-4xl font-bold text-secondary">45</p>
                    <p class="text-gray-500 mt-2">Freelancers currently active</p>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <h3 class="text-xl font-semibold text-primary mb-2">New Messages</h3>
                    <p class="text-4xl font-bold text-secondary">12</p>
                    <p class="text-gray-500 mt-2">Unread messages in your inbox</p>
                </div>
            </div>

  <!-- Line Graph Section -->
  <section class="chart-container">
    <h2 class="text-xl font-bold text-primary mb-3 to-blue-800">Monthly New Projects</h2>
    <canvas id="newProjectsChart"></canvas> <!-- Shortened canvas height -->

</section>
            <!-- Recent Activities Section -->
            <section class="bg-gray-200 p-6 rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-bold text-primary mb-4">Recent Activities</h2>
                <ul>
                    <li class="border-b border-gray-200 py-4">
                        Project "<span class="font-semibold text-primary">E-commerce Website</span>" posted by <strong class="text-secondary">John Doe</strong>
                    </li>
                    <li class="border-b border-gray-200 py-4">
                        New message from <strong class="text-secondary">Jane Smith</strong>
                    </li>
                    <li class="border-b border-gray-200 py-4">
                        Freelancer <strong class="text-secondary">Emily Davis</strong> completed the task
                    </li>
                    <li class="border-b border-gray-200 py-4">
                        Project "<span class="font-semibold text-primary">Website Redesign</span>" updated by <strong class="text-secondary">Michael Brown</strong>
                    </li>
                </ul>
            </section>

            <!-- Notifications Section -->
            <section class="bg-accent p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-primary mb-4">Notifications</h2>
                <ul>
                    <li class="py-2">
                        You have a new message from <strong class="text-secondary">Michael Johnson</strong>
                    </li>
                    <li class="py-2">
                        Reminder: Your project "<span class="font-semibold text-primary">Website Redesign</span>" is due soon
                    </li>
                    <li class="py-2">
                        <strong class="text-secondary">Anna Lee</strong> sent feedback on your recent submission
                    </li>
                </ul>
            </section>

            <!-- Upcoming Deadlines Section -->
            <section class="bg-gray-200 p-6 rounded-lg shadow-lg mt-8">
                <h2 class="text-2xl font-bold text-primary mb-4">Upcoming Deadlines</h2>
                <ul>
                    <li class="border-b border-gray-200 py-4">
                        <span class="font-semibold text-primary">E-commerce Website</span> - Due on <strong class="text-secondary">August 10, 2024</strong>
                    </li>
                    <li class="border-b border-gray-200 py-4">
                        <span class="font-semibold text-primary">Mobile App UI</span> - Due on <strong class="text-secondary">August 15, 2024</strong>
                    </li>
                    <li class="border-b border-gray-200 py-4">
                        <span class="font-semibold text-primary">SEO Optimization</span> - Due on <strong class="text-secondary">August 20, 2024</strong>
                    </li>
                </ul>
            </section>
        </main>
    </div>
@endsection

@section('styles')
    <style>
        /* Base Colors */
        .bg-primary { background-color: #074173; } /* Darker shade for sidebar */
        .text-primary { color: #074173; }
        .bg-secondary { background-color: #1679AB; } /* Slightly darker shade for hover */
        .text-secondary { color: #1679AB; }
        .bg-accent { background-color: #5DEBD7; } /* Softer accent color */
        .text-accent { color: #5DEBD7; }
        .bg-light { background-color: #C5FF95; } /* Lighter background for cards */
        .text-light { color: #C5FF95; }

        /* Custom Transitions */
        .transition-transform { transition: transform 0.3s ease-in-out; }
        .transition-colors { transition: color 0.3s ease-in-out; }
        .canvas-small {
        width: 300px;
        height: 100px;
    }
    .section-small {
        padding: 1rem; /* Adjust padding */
        margin-bottom: 1.5rem; /* Adjust margin */
        max-width: 600px; /* Limit the maximum width */
        margin: auto; /* Center the section horizontally */
    }

    .canvas-small {
        width: 100%; /* Ensure canvas fits the container width */
        height: 200px; /* Adjust height */
    }
        
    </style>
@endsection

@section('scripts')

@endsection

