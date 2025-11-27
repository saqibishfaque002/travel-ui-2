@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
    <p class="text-gray-600 mt-2">Welcome to AW Travel & Tours Admin Panel</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Slides Card -->
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Hero Slides</h3>
                <p class="text-4xl font-bold mt-2">{{ $stats['slides'] }}</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Flights Card -->
    <div class="bg-gradient-to-br from-sky-500 to-sky-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Flight Deals</h3>
                <p class="text-4xl font-bold mt-2">{{ $stats['flights'] }}</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Hotels Card -->
    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Hotels</h3>
                <p class="text-4xl font-bold mt-2">{{ $stats['hotels'] }}</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Packages Card -->
    <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Packages</h3>
                <p class="text-4xl font-bold mt-2">{{ $stats['packages'] }}</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Services Card -->
    <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Services</h3>
                <p class="text-4xl font-bold mt-2">{{ $stats['services'] }}</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Features Card -->
    <div class="bg-gradient-to-br from-pink-500 to-pink-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Features</h3>
                <p class="text-4xl font-bold mt-2">{{ $stats['features'] }}</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Contacts Card -->
    <div class="bg-gradient-to-br from-red-500 to-red-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Unread Messages</h3>
                <p class="text-4xl font-bold mt-2">{{ $stats['contacts'] }}</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Website Status Card -->
    <div class="bg-gradient-to-br from-teal-500 to-teal-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-sm font-semibold uppercase opacity-80">Website Status</h3>
                <p class="text-2xl font-bold mt-2">🟢 Live</p>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-bold text-gray-800 mb-4">Quick Info</h2>
    <div class="space-y-3 text-gray-600">
        <p>✅ <strong>Website:</strong> <a href="{{ route('home') }}" target="_blank" class="text-sky-600 hover:underline">View Live Site</a></p>
        <p>✅ <strong>Authentication:</strong> Laravel Breeze installed and working</p>
        <p>✅ <strong>Database:</strong> All tables created (slides, flights, hotels, packages, services, features, contacts)</p>
        <p>⏳ <strong>CRUD Management:</strong> Coming soon for all sections</p>
        <p>📧 <strong>Admin Email:</strong> {{ auth()->user()->email }}</p>
    </div>
</div>

<!-- Instructions -->
<div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-6">
    <h3 class="text-lg font-bold text-blue-900 mb-2">🚀 Next Steps</h3>
    <ul class="list-disc list-inside text-blue-800 space-y-1">
        <li>CRUD forms coming soon for managing slides, flights, hotels, etc.</li>
        <li>Currently website is using hardcoded data from HomeController</li>
        <li>Check detailed setup guide: <code class="bg-blue-100 px-2 py-1 rounded">ADMIN_PANEL_SETUP_GUIDE.md</code></li>
    </ul>
</div>
@endsection

