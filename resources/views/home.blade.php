@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    @include('components.header')
    
    <main>
        @include('components.hero-slider', ['slides' => $slides])
        @include('components.popular-flights', ['flights' => $flights])
        @include('components.popular-hotels', ['hotels' => $hotels])
        @include('components.packages', ['packages' => $packages])
        @include('components.services', ['services' => $services])
        @include('components.why-choose-us', ['features' => $features])
        @include('components.contact-us')
    </main>
    
    @include('components.footer')
</div>
@endsection

