@extends('layouts.admin')

@section('title', 'Edit Slide')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.slides.index') }}" class="text-sky-600 hover:text-sky-800">← Back to Slides</a>
    <h1 class="text-3xl font-bold text-gray-800 mt-2">Edit Slide</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.slides.update', $slide) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image Path</label>
            <input type="text" name="image" id="image" value="{{ old('image', $slide->image) }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            <p class="text-sm text-gray-500 mt-1">Enter the image filename (must be in public folder)</p>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $slide->title) }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $slide->subtitle) }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            @error('subtitle')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Display Order</label>
            <input type="number" name="order" id="order" value="{{ old('order', $slide->order) }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            <p class="text-sm text-gray-500 mt-1">Lower numbers appear first</p>
            @error('order')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $slide->is_active) ? 'checked' : '' }}
                       class="rounded border-gray-300 text-sky-600 focus:ring-sky-500">
                <span class="ml-2 text-sm text-gray-700">Active (show on website)</span>
            </label>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                Update Slide
            </button>
            <a href="{{ route('admin.slides.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection

