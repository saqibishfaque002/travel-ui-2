<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::latest()->get();
        return view('admin.flights.index', compact('flights'));
    }

    public function create()
    {
        return view('admin.flights.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'route' => 'required|string|max:255',
            'airline' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
        ]);

        $validated['is_active'] = $request->has('is_active');
        Flight::create($validated);

        return redirect()->route('admin.flights.index')->with('success', 'Flight created successfully!');
    }

    public function edit(Flight $flight)
    {
        return view('admin.flights.edit', compact('flight'));
    }

    public function update(Request $request, Flight $flight)
    {
        $validated = $request->validate([
            'route' => 'required|string|max:255',
            'airline' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $flight->update($validated);

        return redirect()->route('admin.flights.index')->with('success', 'Flight updated successfully!');
    }

    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('admin.flights.index')->with('success', 'Flight deleted successfully!');
    }
}
