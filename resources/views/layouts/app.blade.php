<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'AW Travel & Tours - Book Flights & Hotels' }}</title>
    <meta name="description" content="Discover amazing travel destinations and book flights & hotels at the best prices">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('icon-light-32x32.png') }}" media="(prefers-color-scheme: light)">
    <link rel="icon" href="{{ asset('icon-dark-32x32.png') }}" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-icon.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased">
    @yield('content')
    
    @stack('scripts')
</body>
</html>
