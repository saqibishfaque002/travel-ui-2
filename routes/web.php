<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Main Website Route (आपकी travel website)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('contact.submit');

// Breeze Authentication Routes
require __DIR__.'/auth.php';

// User Dashboard (after login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Panel Routes (सिर्फ admin के लिए)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function() {
        return view('admin.dashboard', [
            'stats' => [
                'slides' => \App\Models\Slide::count(),
                'flights' => \App\Models\Flight::count(),
                'hotels' => \App\Models\Hotel::count(),
                'packages' => \App\Models\Package::count(),
                'services' => \App\Models\Service::count(),
                'features' => \App\Models\Feature::count(),
                'contacts' => \App\Models\Contact::where('is_read', false)->count(),
            ]
        ]);
    })->name('dashboard');
    
    // Slides Management
    Route::resource('slides', \App\Http\Controllers\Admin\SlideController::class);
    
    // Flights Management
    Route::resource('flights', \App\Http\Controllers\Admin\FlightController::class);
    
    // Hotels Management
    Route::resource('hotels', \App\Http\Controllers\Admin\HotelController::class);
    
    // Packages Management
    Route::resource('packages', \App\Http\Controllers\Admin\PackageController::class);
    
    // Services Management
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    
    // Features Management
    Route::resource('features', \App\Http\Controllers\Admin\FeatureController::class);
    
    // Contacts Management
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show', 'destroy']);
});
