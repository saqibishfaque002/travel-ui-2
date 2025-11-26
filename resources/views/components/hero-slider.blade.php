@props(['slides' => []])

<section class="relative min-h-[650px] overflow-hidden pt-20" id="hero-slider">
    <!-- Slides -->
    @foreach($slides as $index => $slide)
    <div class="hero-slide absolute inset-0 transition-opacity duration-1000 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}" data-slide="{{ $index }}">
        <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/30 to-black/60"></div>
    </div>
    @endforeach

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 py-12 flex flex-col items-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white text-center mb-3 text-balance animate-in fade-in slide-in-from-bottom-4 duration-700 [text-shadow:_0_4px_20px_rgb(0_0_0_/_90%),_0_2px_8px_rgb(0_0_0_/_80%)]">
            Search Flights & Hotels
        </h1>
        <p class="text-xl text-white/95 text-center mb-8 animate-in fade-in slide-in-from-bottom-4 duration-700 delay-150 [text-shadow:_0_2px_12px_rgb(0_0_0_/_85%),_0_1px_4px_rgb(0_0_0_/_70%)]" id="slide-subtitle">
            {{ $slides[0]['subtitle'] ?? 'Find your perfect getaway' }}
        </p>

        <!-- Search Tabs -->
        <div class="w-full max-w-5xl animate-in fade-in slide-in-from-bottom-4 duration-700 delay-300">
            <div class="mb-6">
                <div class="grid w-full max-w-md mx-auto grid-cols-2 gap-2 bg-white/10 backdrop-blur-sm p-2 rounded-lg">
                    <button onclick="switchTab('flights')" class="search-tab active bg-white text-sky-500 px-6 py-3 rounded-md font-semibold transition-all duration-300 flex items-center justify-center gap-2" data-tab="flights">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/>
                        </svg>
                        Flight Search
                    </button>
                    <button onclick="switchTab('hotels')" class="search-tab px-6 py-3 rounded-md text-white font-semibold transition-all duration-300 flex items-center justify-center gap-2 [text-shadow:_0_2px_8px_rgb(0_0_0_/_80%)]" data-tab="hotels">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18"></path>
                            <path d="M9 8h1"></path>
                            <path d="M9 12h1"></path>
                            <path d="M9 16h1"></path>
                            <path d="M14 8h1"></path>
                            <path d="M14 12h1"></path>
                            <path d="M14 16h1"></path>
                            <path d="M6 3v18"></path>
                            <path d="M18 3v18"></path>
                        </svg>
                        Hotel Search
                    </button>
                </div>
            </div>

            <!-- Flight Search Form -->
            <div id="flights-form" class="tab-content">
                <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="space-y-2">
                            <label for="from" class="text-base font-semibold">From</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input type="text" id="from" placeholder="Departure city" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="to" class="text-base font-semibold">To</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input type="text" id="to" placeholder="Destination city" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="dates" class="text-base font-semibold">Dates</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                    <line x1="16" x2="16" y1="2" y2="6"></line>
                                    <line x1="8" x2="8" y1="2" y2="6"></line>
                                    <line x1="3" x2="21" y1="10" y2="10"></line>
                                </svg>
                                <input type="date" id="dates" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="passengers" class="text-base font-semibold">Passengers</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <input type="number" id="passengers" placeholder="1" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                    </div>
                    <button onclick="handleSearch('flights')" class="w-full mt-8 bg-sky-500 hover:bg-sky-600 text-white h-14 text-lg font-semibold hover:scale-[1.02] hover:shadow-lg transition-all duration-300 rounded-md flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                        Search Flights
                    </button>
                </div>
            </div>

            <!-- Hotel Search Form -->
            <div id="hotels-form" class="tab-content hidden">
                <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="space-y-2">
                            <label for="destination" class="text-base font-semibold">Destination</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input type="text" id="destination" placeholder="Where to?" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="checkin" class="text-base font-semibold">Check-in</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                    <line x1="16" x2="16" y1="2" y2="6"></line>
                                    <line x1="8" x2="8" y1="2" y2="6"></line>
                                    <line x1="3" x2="21" y1="10" y2="10"></line>
                                </svg>
                                <input type="date" id="checkin" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="checkout" class="text-base font-semibold">Check-out</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                    <line x1="16" x2="16" y1="2" y2="6"></line>
                                    <line x1="8" x2="8" y1="2" y2="6"></line>
                                    <line x1="3" x2="21" y1="10" y2="10"></line>
                                </svg>
                                <input type="date" id="checkout" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="guests" class="text-base font-semibold">Guests</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <input type="number" id="guests" placeholder="2" class="pl-11 h-12 text-base w-full rounded-md border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 outline-none px-4 py-2">
                            </div>
                        </div>
                    </div>
                    <button onclick="handleSearch('hotels')" class="w-full mt-8 bg-sky-500 hover:bg-sky-600 text-white h-14 text-lg font-semibold hover:scale-[1.02] hover:shadow-lg transition-all duration-300 rounded-md flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                        Search Hotels
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide Indicators -->
        <div class="flex gap-2 mt-6" id="slide-indicators">
            @foreach($slides as $index => $slide)
            <button onclick="goToSlide({{ $index }})" class="slide-indicator h-2 rounded-full transition-all duration-300 hover:bg-white {{ $index === 0 ? 'w-8 bg-white' : 'w-2 bg-white/50' }}" data-indicator="{{ $index }}"></button>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.slide-indicator');
    const slidesData = @json($slides);
    
    // Automatic slide change
    let slideInterval = setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlide();
    }, 5000);

    function goToSlide(index) {
        currentSlide = index;
        updateSlide();
        // Reset interval
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlide();
        }, 5000);
    }

    function updateSlide() {
        slides.forEach((slide, index) => {
            if (index === currentSlide) {
                slide.classList.add('opacity-100');
                slide.classList.remove('opacity-0');
            } else {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
            }
        });

        indicators.forEach((indicator, index) => {
            if (index === currentSlide) {
                indicator.classList.add('w-8', 'bg-white');
                indicator.classList.remove('w-2', 'bg-white/50');
            } else {
                indicator.classList.remove('w-8', 'bg-white');
                indicator.classList.add('w-2', 'bg-white/50');
            }
        });

        // Update subtitle
        const subtitle = document.getElementById('slide-subtitle');
        if (subtitle && slidesData[currentSlide]) {
            subtitle.textContent = slidesData[currentSlide].subtitle;
        }
    }

    function switchTab(tab) {
        const tabs = document.querySelectorAll('.search-tab');
        const contents = document.querySelectorAll('.tab-content');
        
        tabs.forEach(t => {
            if (t.dataset.tab === tab) {
                t.classList.add('active', 'bg-white', 'text-sky-500');
                t.classList.remove('[text-shadow:_0_2px_8px_rgb(0_0_0_/_80%)]');
            } else {
                t.classList.remove('active', 'bg-white', 'text-sky-500');
                t.classList.add('[text-shadow:_0_2px_8px_rgb(0_0_0_/_80%)]');
            }
        });

        if (tab === 'flights') {
            document.getElementById('flights-form').classList.remove('hidden');
            document.getElementById('hotels-form').classList.add('hidden');
        } else {
            document.getElementById('flights-form').classList.add('hidden');
            document.getElementById('hotels-form').classList.remove('hidden');
        }
    }

    function handleSearch(type) {
        alert(`Searching for ${type}... This would normally submit the form to the server.`);
    }
</script>
@endpush

