@props(['features' => []])

<section id="about" class="py-16 bg-gradient-to-br from-sky-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Why Choose Us?</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Experience the difference with our commitment to excellence
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($features as $feature)
            <div class="text-center group">
                <div class="inline-flex h-20 w-20 items-center justify-center rounded-full bg-white shadow-lg mb-6 group-hover:shadow-xl transition-all duration-300 group-hover:scale-110 group-hover:bg-sky-50">
                    {!! $feature['icon'] !!}
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-sky-500 transition-colors duration-300">
                    {{ $feature['title'] }}
                </h3>
                <p class="text-slate-600 leading-relaxed">{{ $feature['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

