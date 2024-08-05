<!-- resources/views/components/sidebar.blade.php -->
<aside id="sidebar" class="sidebar w-64 min-h-screen p-6 bg-primary text-light fixed top-0 left-0 z-40 transform -translate-x-full transition-transform duration-300 ease-in-out">
    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-4 mt-24">Dashboard</h2>
    <nav>
        <a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded-lg hover:bg-secondary mb-2 transition-colors duration-300 text-light hover:text-white">Overview</a>
        <a href="{{ url('/projects') }}" class="block py-2 px-4 rounded-lg hover:bg-secondary mb-2 transition-colors duration-300 text-light hover:text-white">Projects</a>
        <a href="{{ url('/freelancers') }}" class="block py-2 px-4 rounded-lg hover:bg-secondary mb-2 transition-colors duration-300 text-light hover:text-white">Freelancers</a>
        <a href="{{ url('/clients') }}" class="block py-2 px-4 rounded-lg hover:bg-secondary mb-2 transition-colors duration-300 text-light hover:text-white">Clients</a>
        <a href="{{ url('/message') }}" class="block py-2 px-4 rounded-lg hover:bg-secondary mb-2 transition-colors duration-300 text-light hover:text-white">Messages</a>
        <a href="{{ url('/manage-listings') }}" class="block py-2 px-4 rounded-lg hover:bg-secondary mb-2 transition-colors duration-300 text-light hover:text-white">Manage Listings</a>
    </nav>
</aside>
