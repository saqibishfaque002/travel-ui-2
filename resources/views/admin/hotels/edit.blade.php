@extends('layouts.admin')

@section('title', 'Edit Hotel')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.hotels.index') }}" class="text-sky-600 hover:text-sky-800">← Back to Hotels</a>
    <h1 class="text-3xl font-bold text-gray-800 mt-2">Edit Hotel</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.hotels.update', $hotel) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Hotel Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $hotel->name) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                <input type="text" name="location" id="location" value="{{ old('location', $hotel->location) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('location')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4 mb-4">
            <div>
                <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                <input type="number" step="0.1" min="0" max="5" name="rating" id="rating" value="{{ old('rating', $hotel->rating) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('rating')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="reviews" class="block text-sm font-medium text-gray-700 mb-2">Reviews Count</label>
                <input type="number" min="0" name="reviews" id="reviews" value="{{ old('reviews', $hotel->reviews) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('reviews')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price', $hotel->price) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image Path</label>
            <input type="text" name="image" id="image" value="{{ old('image', $hotel->image) }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            <p class="text-sm text-gray-500 mt-1">Enter the image filename (must be in public folder)</p>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $hotel->is_active) ? 'checked' : '' }}
                       class="rounded border-gray-300 text-sky-600 focus:ring-sky-500">
                <span class="ml-2 text-sm text-gray-700">Active (show on website)</span>
            </label>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                Update Hotel
            </button>
            <a href="{{ route('admin.hotels.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection

