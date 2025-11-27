<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('order')->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'order' => 'required|integer',
        ]);

        $validated['is_active'] = $request->has('is_active');

        Slide::create($validated);

        return redirect()->route('admin.slides.index')->with('success', 'Slide created successfully!');
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $validated = $request->validate([
            'image' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'order' => 'required|integer',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $slide->update($validated);

        return redirect()->route('admin.slides.index')->with('success', 'Slide updated successfully!');
    }

    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect()->route('admin.slides.index')->with('success', 'Slide deleted successfully!');
    }
}
