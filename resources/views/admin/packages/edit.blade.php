@extends('layouts.admin')

@section('title', 'Edit Package')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.packages.index') }}" class="text-sky-600 hover:text-sky-800">← Back to Packages</a>
    <h1 class="text-3xl font-bold text-gray-800 mt-2">Edit Package</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.packages.update', $package) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Package Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $package->name) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                <input type="text" name="location" id="location" value="{{ old('location', $package->location) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('location')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4 mb-4">
            <div>
                <label for="duration" class="block text-sm font-medium text-gray-700 mb-2">Duration</label>
                <input type="text" name="duration" id="duration" value="{{ old('duration', $package->duration) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('duration')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="people" class="block text-sm font-medium text-gray-700 mb-2">People</label>
                <input type="text" name="people" id="people" value="{{ old('people', $package->people) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('people')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price', $package->price) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image Path</label>
            <input type="text" name="image" id="image" value="{{ old('image', $package->image) }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            <p class="text-sm text-gray-500 mt-1">Enter the image filename (must be in public folder)</p>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="features" class="block text-sm font-medium text-gray-700 mb-2">Features (one per line)</label>
            <textarea name="features" id="features" rows="6" required
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">{{ old('features', is_array($package->features) ? implode("\n", $package->features) : $package->features) }}</textarea>
            <p class="text-sm text-gray-500 mt-1">Enter each feature on a new line</p>
            @error('features')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $package->is_active) ? 'checked' : '' }}
                       class="rounded border-gray-300 text-sky-600 focus:ring-sky-500">
                <span class="ml-2 text-sm text-gray-700">Active (show on website)</span>
            </label>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                Update Package
            </button>
            <a href="{{ route('admin.packages.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection

