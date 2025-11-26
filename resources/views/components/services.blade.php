@props(['services' => []])

<section id="services" class="py-16 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Our Services</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Everything you need for a hassle-free travel experience</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $service)
            <div class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 hover:border-sky-200 hover:-translate-y-1">
                <div class="h-14 w-14 rounded-lg bg-sky-100 flex items-center justify-center mb-4 group-hover:bg-sky-500 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                    {!! $service['icon'] !!}
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $service['title'] }}</h3>
                <p class="text-slate-600 text-sm leading-relaxed">{{ $service['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

