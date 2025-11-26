<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $slides = [
            [
                'image' => 'beautiful-tropical-beach-destination-with-crystal-.jpg',
                'title' => 'Discover Paradise',
                'subtitle' => 'Find your perfect getaway',
            ],
            [
                'image' => 'stunning-mountain-landscape-with-modern-city-skyli.jpg',
                'title' => 'Explore New Horizons',
                'subtitle' => 'Adventure awaits you',
            ],
            [
                'image' => 'iconic-european-city-with-historic-architecture-at.jpg',
                'title' => 'Create Memories',
                'subtitle' => 'Book your dream vacation',
            ],
        ];

        $flights = [
            [
                'id' => 1,
                'route' => 'New York → Paris',
                'airline' => 'Air France',
                'price' => '$549',
                'duration' => '7h 30m',
            ],
            [
                'id' => 2,
                'route' => 'London → Dubai',
                'airline' => 'Emirates',
                'price' => '$699',
                'duration' => '6h 45m',
            ],
            [
                'id' => 3,
                'route' => 'Tokyo → Los Angeles',
                'airline' => 'Japan Airlines',
                'price' => '$899',
                'duration' => '10h 15m',
            ],
            [
                'id' => 4,
                'route' => 'Sydney → Singapore',
                'airline' => 'Singapore Airlines',
                'price' => '$449',
                'duration' => '8h 20m',
            ],
            [
                'id' => 5,
                'route' => 'Rome → Barcelona',
                'airline' => 'Iberia',
                'price' => '$199',
                'duration' => '2h 10m',
            ],
        ];

        $hotels = [
            [
                'id' => 1,
                'name' => 'Grand Plaza Hotel',
                'location' => 'Paris, France',
                'rating' => 4.8,
                'reviews' => 1250,
                'price' => '$299',
                'image' => 'luxury-hotel-exterior-with-modern-architecture.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Marina Bay Resort',
                'location' => 'Dubai, UAE',
                'rating' => 4.9,
                'reviews' => 980,
                'price' => '$399',
                'image' => 'beachfront-resort-with-ocean-view.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Urban Boutique Hotel',
                'location' => 'New York, USA',
                'rating' => 4.7,
                'reviews' => 1567,
                'price' => '$249',
                'image' => 'modern-boutique-hotel-in-city.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Royal Gardens Hotel',
                'location' => 'London, UK',
                'rating' => 4.8,
                'reviews' => 834,
                'price' => '$279',
                'image' => 'elegant-historic-hotel-with-gardens.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Skyline Suites',
                'location' => 'Tokyo, Japan',
                'rating' => 4.9,
                'reviews' => 1123,
                'price' => '$329',
                'image' => 'modern-hotel-with-city-skyline-view.jpg',
            ],
            [
                'id' => 6,
                'name' => 'Coastal Paradise Resort',
                'location' => 'Bali, Indonesia',
                'rating' => 4.8,
                'reviews' => 2341,
                'price' => '$199',
                'image' => 'tropical-beach-resort.png',
            ],
        ];

        $packages = [
            [
                'id' => 1,
                'name' => 'Paris Romantic Getaway',
                'location' => 'Paris, France',
                'duration' => '5 Days, 4 Nights',
                'people' => '2 Adults',
                'price' => '$1,299',
                'image' => 'eiffel-tower-paris-romance.jpg',
                'features' => ['4-Star Hotel', 'Daily Breakfast', 'City Tours', 'Airport Transfer'],
            ],
            [
                'id' => 2,
                'name' => 'Tropical Paradise Escape',
                'location' => 'Bali, Indonesia',
                'duration' => '7 Days, 6 Nights',
                'people' => '2 Adults',
                'price' => '$1,599',
                'image' => 'tropical-beach-resort-bali.jpg',
                'features' => ['Beach Resort', 'All Meals Included', 'Water Sports', 'Spa Treatment'],
            ],
            [
                'id' => 3,
                'name' => 'Dubai Luxury Experience',
                'location' => 'Dubai, UAE',
                'duration' => '4 Days, 3 Nights',
                'people' => '2 Adults',
                'price' => '$1,899',
                'image' => 'dubai-burj-khalifa-skyline.jpg',
                'features' => ['5-Star Hotel', 'Desert Safari', 'Burj Khalifa Tour', 'Shopping Tour'],
            ],
            [
                'id' => 4,
                'name' => 'Tokyo Cultural Journey',
                'location' => 'Tokyo, Japan',
                'duration' => '6 Days, 5 Nights',
                'people' => '2 Adults',
                'price' => '$1,749',
                'image' => 'tokyo-japan-temple-cherry-blossom.jpg',
                'features' => ['Boutique Hotel', 'Cultural Tours', 'Traditional Meals', 'Mount Fuji Trip'],
            ],
            [
                'id' => 5,
                'name' => 'New York City Adventure',
                'location' => 'New York, USA',
                'duration' => '5 Days, 4 Nights',
                'people' => '2 Adults',
                'price' => '$1,499',
                'image' => 'new-york-city-manhattan-skyline.jpg',
                'features' => ['Central Hotel', 'Broadway Show', 'City Pass', 'Food Tours'],
            ],
            [
                'id' => 6,
                'name' => 'Swiss Alps Retreat',
                'location' => 'Interlaken, Switzerland',
                'duration' => '6 Days, 5 Nights',
                'people' => '2 Adults',
                'price' => '$2,199',
                'image' => 'swiss-alps-mountains-snow.jpg',
                'features' => ['Mountain Lodge', 'Ski Pass', 'Cable Car Rides', 'Fondue Dinner'],
            ],
        ];

        $services = [
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-sky-500 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
                'title' => 'Travel Insurance',
                'description' => 'Comprehensive coverage for your peace of mind during your journey',
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-sky-500 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path><circle cx="7" cy="17" r="2"></circle><path d="M9 17h6"></path><circle cx="17" cy="17" r="2"></circle></svg>',
                'title' => 'Car Rentals',
                'description' => 'Wide selection of vehicles at competitive rates worldwide',
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-sky-500 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>',
                'title' => 'Visa Assistance',
                'description' => 'Expert guidance for smooth visa application process',
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-sky-500 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path></svg>',
                'title' => 'Airport Transfers',
                'description' => 'Comfortable and reliable transportation to and from airports',
            ],
        ];

        $features = [
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-sky-500 group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" x2="12" y1="19" y2="22"></line></svg>',
                'title' => '24/7 Customer Support',
                'description' => 'Our dedicated team is always here to help you, any time of day or night',
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-sky-500 group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>',
                'title' => 'Best Price Guarantee',
                'description' => 'We guarantee the most competitive prices for flights and hotels',
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-sky-500 group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>',
                'title' => 'Trusted Worldwide',
                'description' => 'Join millions of satisfied travelers who trust us with their journeys',
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-sky-500 group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 9 5 12 1.8-5.2L21 14Z"></path><path d="M7.2 2.2 8 5.1"></path><path d="m5.1 8-2.9-.8"></path><path d="M14 4.1 12 6"></path><path d="m6 12-1.9 2"></path></svg>',
                'title' => 'Easy Booking',
                'description' => 'Simple and secure booking process with instant confirmation',
            ],
        ];

        return view('home', compact('slides', 'flights', 'hotels', 'packages', 'services', 'features'));
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically save to database or send email
        // For now, we'll just redirect back with a success message

        return redirect()->route('home')->with('success', 'Thank you for contacting us! We\'ll get back to you soon.');
    }
}
