@props(['flights' => []])

<section id="flights" class="py-16 bg-slate-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Popular Flight Deals</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Discover amazing flight deals to destinations around the world
            </p>
        </div>

        <div class="relative">
            <!-- Navigation Buttons -->
            <button onclick="scrollFlights('left')" id="flights-prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 bg-white rounded-full p-2 shadow-lg hover:bg-sky-50 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"/>
                </svg>
            </button>
            <button onclick="scrollFlights('right')" id="flights-next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 bg-white rounded-full p-2 shadow-lg hover:bg-sky-50 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"/>
                </svg>
            </button>

            <!-- Flight Cards -->
            <div class="overflow-hidden">
                <div id="flights-container" class="flex gap-4 transition-transform duration-500 ease-out" style="transform: translateX(0%)">
                    @foreach($flights as $flight)
                    <div class="flex-none w-[calc(33.333%-0.67rem)] bg-white rounded-xl p-5 shadow-md hover:shadow-2xl transition-all duration-300 hover:scale-105 border border-slate-100">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="h-10 w-10 rounded-full bg-sky-100 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-700">{{ $flight['airline'] }}</p>
                                <p class="text-xs text-slate-500">{{ $flight['duration'] }}</p>
                            </div>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mb-3">{{ $flight['route'] }}</h4>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs text-slate-500">From</p>
                                <p class="text-2xl font-bold text-sky-500">{{ $flight['price'] }}</p>
                            </div>
                            <button class="bg-sky-500 hover:bg-sky-600 text-white hover:scale-110 transition-all duration-200 px-4 py-2 rounded-md text-sm font-semibold">
                                Book
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    let flightStartIndex = 0;
    const flightsContainer = document.getElementById('flights-container');
    const totalFlights = {{ count($flights) }};
    const maxIndex = Math.max(0, totalFlights - 3);

    function scrollFlights(direction) {
        if (direction === 'left') {
            flightStartIndex = Math.max(0, flightStartIndex - 1);
        } else {
            flightStartIndex = Math.min(maxIndex, flightStartIndex + 1);
        }
        
        const translateX = -(flightStartIndex * (100 / 3));
        flightsContainer.style.transform = `translateX(${translateX}%)`;
        
        // Update button states
        document.getElementById('flights-prev').disabled = flightStartIndex === 0;
        document.getElementById('flights-next').disabled = flightStartIndex >= maxIndex;
    }

    // Initialize button states
    document.getElementById('flights-prev').disabled = true;
    if (totalFlights <= 3) {
        document.getElementById('flights-next').disabled = true;
    }
</script>
@endpush

