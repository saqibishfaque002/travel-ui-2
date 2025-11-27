<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slide;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Service;
use App\Models\Feature;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Clear existing data
        Slide::truncate();
        Flight::truncate();
        Hotel::truncate();
        Package::truncate();
        Service::truncate();
        Feature::truncate();

        // Seed Slides
        $slides = [
            [
                'image' => 'beautiful-tropical-beach-destination-with-crystal-.jpg',
                'title' => 'Discover Paradise',
                'subtitle' => 'Find your perfect getaway',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'image' => 'stunning-mountain-landscape-with-modern-city-skyli.jpg',
                'title' => 'Explore New Horizons',
                'subtitle' => 'Adventure awaits you',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'image' => 'iconic-european-city-with-historic-architecture-at.jpg',
                'title' => 'Create Memories',
                'subtitle' => 'Book your dream vacation',
                'is_active' => true,
                'order' => 3,
            ],
        ];

        foreach ($slides as $slide) {
            Slide::create($slide);
        }

        // Seed Flights
        $flights = [
            [
                'route' => 'New York → Paris',
                'airline' => 'Air France',
                'price' => '$549',
                'duration' => '7h 30m',
                'is_active' => true,
            ],
            [
                'route' => 'London → Dubai',
                'airline' => 'Emirates',
                'price' => '$699',
                'duration' => '6h 45m',
                'is_active' => true,
            ],
            [
                'route' => 'Tokyo → Los Angeles',
                'airline' => 'Japan Airlines',
                'price' => '$899',
                'duration' => '10h 15m',
                'is_active' => true,
            ],
            [
                'route' => 'Sydney → Singapore',
                'airline' => 'Singapore Airlines',
                'price' => '$449',
                'duration' => '8h 20m',
                'is_active' => true,
            ],
            [
                'route' => 'Rome → Barcelona',
                'airline' => 'Iberia',
                'price' => '$199',
                'duration' => '2h 10m',
                'is_active' => true,
            ],
        ];

        foreach ($flights as $flight) {
            Flight::create($flight);
        }

        // Seed Hotels
        $hotels = [
            [
                'name' => 'Grand Plaza Hotel',
                'location' => 'Paris, France',
                'rating' => 4.8,
                'reviews' => 1250,
                'price' => '$299',
                'image' => 'luxury-hotel-exterior-with-modern-architecture.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Marina Bay Resort',
                'location' => 'Dubai, UAE',
                'rating' => 4.9,
                'reviews' => 980,
                'price' => '$399',
                'image' => 'beachfront-resort-with-ocean-view.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Urban Boutique Hotel',
                'location' => 'New York, USA',
                'rating' => 4.7,
                'reviews' => 1567,
                'price' => '$249',
                'image' => 'modern-boutique-hotel-in-city.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Royal Gardens Hotel',
                'location' => 'London, UK',
                'rating' => 4.8,
                'reviews' => 834,
                'price' => '$279',
                'image' => 'elegant-historic-hotel-with-gardens.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Skyline Suites',
                'location' => 'Tokyo, Japan',
                'rating' => 4.9,
                'reviews' => 1123,
                'price' => '$329',
                'image' => 'modern-hotel-with-city-skyline-view.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Coastal Paradise Resort',
                'location' => 'Bali, Indonesia',
                'rating' => 4.8,
                'reviews' => 2341,
                'price' => '$199',
                'image' => 'tropical-beach-resort.png',
                'is_active' => true,
            ],
        ];

        foreach ($hotels as $hotel) {
            Hotel::create($hotel);
        }

        // Seed Packages
        $packages = [
            [
                'name' => 'Paris Romantic Getaway',
                'location' => 'Paris, France',
                'duration' => '5 Days, 4 Nights',
                'people' => '2 Adults',
                'price' => '$1,299',
                'image' => 'eiffel-tower-paris-romance.jpg',
                'features' => ['4-Star Hotel', 'Daily Breakfast', 'City Tours', 'Airport Transfer'],
                'is_active' => true,
            ],
            [
                'name' => 'Tropical Paradise Escape',
                'location' => 'Bali, Indonesia',
                'duration' => '7 Days, 6 Nights',
                'people' => '2 Adults',
                'price' => '$1,599',
                'image' => 'tropical-beach-resort-bali.jpg',
                'features' => ['Beach Resort', 'All Meals Included', 'Water Sports', 'Spa Treatment'],
                'is_active' => true,
            ],
            [
                'name' => 'Dubai Luxury Experience',
                'location' => 'Dubai, UAE',
                'duration' => '4 Days, 3 Nights',
                'people' => '2 Adults',
                'price' => '$1,899',
                'image' => 'dubai-burj-khalifa-skyline.jpg',
                'features' => ['5-Star Hotel', 'Desert Safari', 'Burj Khalifa Tour', 'Shopping Tour'],
                'is_active' => true,
            ],
            [
                'name' => 'Tokyo Cultural Journey',
                'location' => 'Tokyo, Japan',
                'duration' => '6 Days, 5 Nights',
                'people' => '2 Adults',
                'price' => '$1,749',
                'image' => 'tokyo-japan-temple-cherry-blossom.jpg',
                'features' => ['Boutique Hotel', 'Cultural Tours', 'Traditional Meals', 'Mount Fuji Trip'],
                'is_active' => true,
            ],
            [
                'name' => 'New York City Adventure',
                'location' => 'New York, USA',
                'duration' => '5 Days, 4 Nights',
                'people' => '2 Adults',
                'price' => '$1,499',
                'image' => 'new-york-city-manhattan-skyline.jpg',
                'features' => ['Central Hotel', 'Broadway Show', 'City Pass', 'Food Tours'],
                'is_active' => true,
            ],
            [
                'name' => 'Swiss Alps Retreat',
                'location' => 'Interlaken, Switzerland',
                'duration' => '6 Days, 5 Nights',
                'people' => '2 Adults',
                'price' => '$2,199',
                'image' => 'swiss-alps-mountains-snow.jpg',
                'features' => ['Mountain Lodge', 'Ski Pass', 'Cable Car Rides', 'Fondue Dinner'],
                'is_active' => true,
            ],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }

        // Seed Services
        $services = [
            [
                'icon' => '🛡️',
                'title' => 'Travel Insurance',
                'description' => 'Comprehensive coverage for your peace of mind during your journey',
                'is_active' => true,
            ],
            [
                'icon' => '🚗',
                'title' => 'Car Rentals',
                'description' => 'Wide selection of vehicles at competitive rates worldwide',
                'is_active' => true,
            ],
            [
                'icon' => '📄',
                'title' => 'Visa Assistance',
                'description' => 'Expert guidance for smooth visa application process',
                'is_active' => true,
            ],
            [
                'icon' => '🚕',
                'title' => 'Airport Transfers',
                'description' => 'Comfortable and reliable transportation to and from airports',
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Seed Features
        $features = [
            [
                'icon' => '🎧',
                'title' => '24/7 Customer Support',
                'description' => 'Our dedicated team is always here to help you, any time of day or night',
                'is_active' => true,
            ],
            [
                'icon' => '💰',
                'title' => 'Best Price Guarantee',
                'description' => 'We guarantee the most competitive prices for flights and hotels',
                'is_active' => true,
            ],
            [
                'icon' => '🌍',
                'title' => 'Trusted Worldwide',
                'description' => 'Join millions of satisfied travelers who trust us with their journeys',
                'is_active' => true,
            ],
            [
                'icon' => '⚡',
                'title' => 'Easy Booking',
                'description' => 'Simple and secure booking process with instant confirmation',
                'is_active' => true,
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }

        $this->command->info('✅ Database seeded successfully!');
        $this->command->info('✅ Added 3 slides, 5 flights, 6 hotels, 6 packages, 4 services, 4 features');
    }
}
