@props(['hotels' => []])

<section id="hotels" class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Featured Hotels</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Stay in world-class accommodations handpicked for comfort and convenience
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($hotels as $hotel)
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 hover:border-sky-200">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset($hotel['image']) }}" alt="{{ $hotel['name'] }}" class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white rounded-full px-3 py-1 flex items-center gap-1 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <span class="text-sm font-semibold">{{ $hotel['rating'] }}</span>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $hotel['name'] }}</h3>
                    <div class="flex items-center gap-1 text-slate-600 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <p class="text-sm">{{ $hotel['location'] }}</p>
                    </div>
                    <p class="text-xs text-slate-400 mb-4">{{ $hotel['reviews'] }} reviews</p>

                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500">Per night from</p>
                            <p class="text-2xl font-bold text-sky-500">{{ $hotel['price'] }}</p>
                        </div>
                        <button class="bg-sky-500 hover:bg-sky-600 text-white hover:scale-110 transition-all duration-200 px-4 py-2 rounded-md font-semibold">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <button class="border-2 border-sky-500 text-sky-500 hover:bg-sky-50 bg-transparent hover:scale-105 transition-all duration-300 px-6 py-3 rounded-md font-semibold">
                View All Hotels
            </button>
        </div>
    </div>
</section>

