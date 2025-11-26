@props(['packages' => []])

<section id="packages" class="py-16 bg-slate-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Travel Packages</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Discover our handcrafted travel packages designed for unforgettable experiences
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($packages as $package)
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 hover:border-sky-200">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset($package['image']) }}" alt="{{ $package['name'] }}" class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white rounded-full px-3 py-1.5 shadow-lg">
                        <span class="text-sm font-bold text-sky-500">{{ $package['price'] }}</span>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $package['name'] }}</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-2 text-slate-600 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>{{ $package['location'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-600 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                <line x1="16" x2="16" y1="2" y2="6"></line>
                                <line x1="8" x2="8" y1="2" y2="6"></line>
                                <line x1="3" x2="21" y1="10" y2="10"></line>
                            </svg>
                            <span>{{ $package['duration'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-600 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>{{ $package['people'] }}</span>
                        </div>
                    </div>

                    <div class="border-t border-slate-100 pt-4 mb-4">
                        <ul class="space-y-2">
                            @foreach($package['features'] as $feature)
                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span>{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <button class="w-full bg-sky-500 hover:bg-sky-600 text-white hover:scale-105 transition-all duration-200 px-4 py-2 rounded-md font-semibold">
                        Explore Package
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <button class="border-2 border-sky-500 text-sky-500 hover:bg-sky-50 bg-transparent hover:scale-105 transition-all duration-300 px-6 py-3 rounded-md font-semibold">
                View All Packages
            </button>
        </div>
    </div>
</section>

