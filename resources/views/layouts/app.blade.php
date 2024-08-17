<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OutCreate')</title>
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.9.1/dist/cdn.min.js" defer></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    
    <!-- JS Links -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Inline CSS -->
    <style>
        /* Base Colors */
        .bg-primary { background-color: #003366; } /* Dark Blue */
        .text-primary { color: #003366; }
        .bg-secondary { background-color: #0066cc; } /* Bright Blue */
        .text-secondary { color: #0066cc; }
        .bg-accent { background-color: #66b3ff; } /* Light Blue */
        .text-accent { color: #66b3ff; }
        /* .bg-gray-300 { background-color: #e6f2ff; }  */
        .text-light { color: #e6f2ff; }

        /* Hero Background */
        .hero-bg {
            background: linear-gradient(rgba(0, 51, 102, 0.6), rgba(0, 51, 102, 0.6)), url('@yield('hero-bg', 'default-hero.jpg')') center center / cover no-repeat;
            height: 400px; /* Adjust height as needed */
            background-size: cover;
        }

        /* Navbar Styles */
        nav {
            backdrop-filter: blur(10px); /* Adjust the blur amount as needed */
        }
        nav a {
            color: #e6f2ff;
            position: relative; /* Required for the absolute positioning of the ::after pseudo-element */
            padding-bottom: 2px; /* Space for the underline */
            transition: color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px; /* Height of the underline */
            background-color: #66b3ff; /* Light Blue color for the underline */
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        nav a:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
            background-color: #207cdf; /* Change underline color on hover */
        }


        /* Footer Styles */
        footer {
            /* background: linear-gradient(90deg, #003366, #0066cc); Gradient from Dark Blue to Bright Blue */
            /* color: #e6f2ff; */
        }
        footer a {
            color: #66b3ff;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #e6f2ff;
        }

        /* Button Styles */
        .btn-primary {
            background-color: #003366;
            color: #e6f2ff;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0066cc;
        }
        .btn-secondary {
            background-color: #0066cc;
            color: #e6f2ff;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #003366;
        }
        #newProjectsChart {
            width: 100%; /* Full width of its container */
            height: 150px; /* Reduced height */
        }
        .chart-container {
            padding: 16px; /* Spacing around the section */
            background: #eeeeee86; /* Background for the section */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
            margin: 16px; /* Margin for spacing */
        }
        .content {
            margin-top: 12px; /* Space above the new content */
        }
        .text-primary {
            color: #333; /* Darker color for the heading */
        }
        .text-gray-700 {
            color: #555; /* Medium gray text color */
        }
        .text-gray-600 {
            color: #666; /* Slightly lighter gray text color */
        }
    </style>
</head>
<body class="bg-gray-300 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-gray-900 text-light py-4 px-6 fixed top-0 left-0 right-0 z-50 shadow-lg bg-opacity-75">
        <div class="container mx-auto flex items-center justify-between">
            
            <!-- Logo Section -->
            <div class="logo flex items-center">
                @auth
                            <!-- Sidebar Toggle Button -->
        <button id="sidebarToggle" class="fixed top-4 left-4 z-50 text-light p-3 rounded-lg shadow-lg hover:bg-secondary transition-colors duration-300">
            <i class="fas fa-bars fa-lg"></i>
        </button>

        @include('components.sidebar')

                @endauth
                <a href="{{ url('/') }}" class="flex items-center text-white text-2xl font-semibold">
                    <img src="{{ asset('images/outcreate-logo.jpeg') }}" alt="OUTCREATE Logo" class="h-10 w-10 rounded-full mr-3 object-cover">
                    <span>OutCreate</span>
                </a>
            </div>
    
            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-6 font-semibold">
                <a href="{{ url('/browse-jobs') }}" class="{{ request()->is('jobs*') ? 'border-b-2 border-blue-300 text-white' : 'text-white' }} hover:text-gray-300 flex items-center">
                    <i class="fas fa-briefcase mr-2"></i> Browse Job
                </a>
                <a href="{{ url('/services') }}" class="{{ request()->is('services*') ? 'border-b-2 border-blue-300 text-white' : 'text-white' }} hover:text-gray-300 flex items-center">
                    <i class="fas fa-concierge-bell mr-2"></i> Services
                </a>
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="{{ request()->is('reviews*') ? 'border-b-2 border-blue-300 text-white' : 'text-white' }} hover:text-gray-300 flex items-center">
                        <i class="fas fa-star mr-2"></i> Reviews <i :class="{'fa-angle-down': !open, 'fa-angle-up': open}" class="fas ml-2"></i>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                        <a href="{{ url('/reviews/latest') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                            <i class="fas fa-newspaper mr-2"></i> Latest Reviews
                        </a>
                        <a href="{{ url('/reviews/top') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                            <i class="fas fa-trophy mr-2"></i> Top Reviews
                        </a>
                    </div>
                </div>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'border-b-2 border-blue-300 text-white' : 'text-white' }} hover:text-gray-300 flex items-center">
                    <i class="fas fa-envelope mr-2"></i> Contact
                </a>
            </div>
    
            <!-- Conditional Buttons -->
            <div class="hidden md:flex items-center space-x-4 font-semibold">
                @auth
                
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="flex items-center text-white hover:text-gray-300 focus:outline-none">
                            <i class="fas fa-user-circle mr-2"></i> Hi, {{ auth()->user()->name }}!
                            <i :class="{'fa-angle-down': !open, 'fa-angle-up': open}" class="fas ml-2"></i>
                        </button>
                        
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                            @if (auth()->user()->role == 'freelancer')
                            <a href="{{ route('profile.show-freelancer') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                                <i class="fa-solid fa-circle-user mr-2"></i> Freelancer`s Profile
                            </a>
                        @else
                            <a href="{{ route('profile.show-client') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                                <i class="fa-solid fa-circle-user mr-2"></i> Client`s Profile
                            </a>
                        @endif
                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                            <i class="fas fa-bell mr-2"></i> Notifications
                        </a>
                        
                            <a href="#" @click.prevent="$refs.logoutForm.submit();" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                                <i class="fas fa-sign-out-alt mr-2"></i> Log out
                            </a>
                        </div>
                        
                        <!-- Hidden logout form -->
                        <form x-ref="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @else
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="flex items-center text-white hover:text-gray-300 focus:outline-none">
                            <i class="fas fa-user mr-2"></i> Account
                            <i :class="{'fa-angle-down': !open, 'fa-angle-up': open}" class="fas ml-2"></i>
                        </button>
                        
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50">
                            <a href="{{ url('/login') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                                <i class="fas fa-sign-in-alt mr-2"></i> Log in
                            </a>
                            <a href="{{ url('/register') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 flex items-center">
                                <i class="fas fa-user-plus mr-2"></i> Register
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
            
    
            <!-- Mobile Menu Toggle -->
            <div class="md:hidden flex items-center">
                <button class="text-white">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>
    
    
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    



    <footer class="bg-gray-900 dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
              <div class="mb-6 md:mb-0">
                  <a href="https://flowbite.com/" class="flex items-center">
                      <img src="{{ asset('images/outcreate-logo.jpeg') }}" class="h-8 me-3 rounded-full" alt="FlowBite Logo" />
                      <span class="text-white self-center text-2xl font-semibold whitespace-nowrap dark:text-white mx-2">OutCreate</span>
                  </a>
              </div>
              <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="#" class="hover:underline">Flowbite</a>
                          </li>
                          <li>
                              <a href="#" class="hover:underline">Tailwind CSS</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                          </li>
                          <li>
                              <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="#" class="hover:underline">Privacy Policy</a>
                          </li>
                          <li>
                              <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <div class="sm:flex sm:items-center sm:justify-between">
              <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">OutCreate</a>. All Rights Reserved.
              </span>
              <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-white dark:hover:text-white tracking-wider">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-white dark:hover:text-white mx-2 tracking-wider">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-white dark:hover:text-white mx-2 tracking-wider">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-white dark:hover:text-white mx-2 tracking-wider">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-white dark:hover:text-white mx-2 tracking-wider">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059.345-.144.696-.274 1.036-1.024 2.138-4.06 2.565-6.058 1.159a5.595 5.595 0 0 1-.939-.93c-1.17-1.18-.668-2.388 1.038-2.622 1.95-.254 3.781-.804 5.48-1.647.335-.161.62-.387.863-.657a3.786 3.786 0 0 0 1.342-.716Zm-2.354 8.46a.857.857 0 1 1-.855-.86.856.856 0 0 1 .855.86Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">YouTube channel</span>
                </a>
            </div>
            
          </div>
        </div>
    </footer>
    

    
    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');

            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('-translate-x-full');
                    sidebar.classList.toggle('translate-x-0');
                });
            }
        });

        /////
       // Ensure the DOM is loaded before initializing the chart
    document.addEventListener('DOMContentLoaded', function () {
        // Get the canvas element
        var ctx = document.getElementById('newProjectsChart').getContext('2d');

        // Create a new Chart instance
        var newProjectsChart = new Chart(ctx, {
            type: 'bar', // You can change this to 'line', 'pie', etc.
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'], // X-axis labels
                datasets: [{
                    label: 'Number of New Projects',
                    data: [12, 19, 3, 5], // Data for the chart
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Bar color
                    borderColor: 'rgba(75, 192, 192, 1)', // Border color
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    });
    </script>


    @stack('scripts')
</body>
</html>
