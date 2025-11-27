<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Fetch data from database (only active items)
        $slides = \App\Models\Slide::where('is_active', true)
            ->orderBy('order')
            ->get()
            ->toArray();
        
        $flights = \App\Models\Flight::where('is_active', true)
            ->latest()
            ->get()
            ->toArray();
        
        $hotels = \App\Models\Hotel::where('is_active', true)
            ->latest()
            ->get()
            ->toArray();
        
        $packages = \App\Models\Package::where('is_active', true)
            ->latest()
            ->get()
            ->toArray();
        
        $services = \App\Models\Service::where('is_active', true)
            ->latest()
            ->get()
            ->toArray();
        
        $features = \App\Models\Feature::where('is_active', true)
            ->latest()
            ->get()
            ->toArray();

        return view('home', compact('slides', 'flights', 'hotels', 'packages', 'services', 'features'));
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save contact submission to database
        \App\Models\Contact::create($validated);

        return redirect()->route('home')->with('success', 'Thank you for contacting us! We\'ll get back to you soon.');
    }
}
