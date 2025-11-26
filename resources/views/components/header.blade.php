<header id="header" class="sticky top-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-sm shadow-sm">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('aw.png') }}" alt="AW Travel & Tours" class="h-10 w-auto">
                <span class="text-2xl font-bold text-slate-900">AW Travel & Tours</span>
            </div>

            <!-- Navigation -->
            <nav class="hidden lg:flex items-center gap-8">
                <a href="#flights" class="text-slate-700 hover:text-sky-500 transition-all duration-300 font-medium relative group scroll-link">
                    Flights
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-sky-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#hotels" class="text-slate-700 hover:text-sky-500 transition-all duration-300 font-medium relative group scroll-link">
                    Hotels
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-sky-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#packages" class="text-slate-700 hover:text-sky-500 transition-all duration-300 font-medium relative group scroll-link">
                    Packages
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-sky-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#services" class="text-slate-700 hover:text-sky-500 transition-all duration-300 font-medium relative group scroll-link">
                    Services
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-sky-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#about" class="text-slate-700 hover:text-sky-500 transition-all duration-300 font-medium relative group scroll-link">
                    About Us
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-sky-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#contact" class="text-slate-700 hover:text-sky-500 transition-all duration-300 font-medium relative group scroll-link">
                    Contact Us
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-sky-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>

            <!-- Right Actions -->
            <div class="flex items-center gap-4">
                <button class="hidden md:flex hover:scale-110 transition-transform duration-200 text-slate-700 hover:text-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
                <button class="hidden md:flex hover:scale-110 transition-transform duration-200 text-slate-700 hover:text-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                        <path d="M2 12h20"></path>
                    </svg>
                </button>
                <button class="hover:scale-110 transition-transform duration-200 text-slate-700 hover:text-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

@push('scripts')
<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const href = this.getAttribute('href');
            const element = document.querySelector(href);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Header scroll effect
    let lastScroll = 0;
    const header = document.getElementById('header');
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 10) {
            header.classList.add('shadow-sm');
        } else {
            header.classList.remove('shadow-sm');
        }
        
        lastScroll = currentScroll;
    });
</script>
@endpush

