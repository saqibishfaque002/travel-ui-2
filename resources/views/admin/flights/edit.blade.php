@extends('layouts.admin')

@section('title', 'Edit Flight')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.flights.index') }}" class="text-sky-600 hover:text-sky-800">← Back to Flights</a>
    <h1 class="text-3xl font-bold text-gray-800 mt-2">Edit Flight</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.flights.update', $flight) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="route" class="block text-sm font-medium text-gray-700 mb-2">Route</label>
                <input type="text" name="route" id="route" value="{{ old('route', $flight->route) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('route')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="airline" class="block text-sm font-medium text-gray-700 mb-2">Airline</label>
                <input type="text" name="airline" id="airline" value="{{ old('airline', $flight->airline) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('airline')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="duration" class="block text-sm font-medium text-gray-700 mb-2">Duration</label>
                <input type="text" name="duration" id="duration" value="{{ old('duration', $flight->duration) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('duration')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price', $flight->price) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $flight->is_active) ? 'checked' : '' }}
                       class="rounded border-gray-300 text-sky-600 focus:ring-sky-500">
                <span class="ml-2 text-sm text-gray-700">Active (show on website)</span>
            </label>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                Update Flight
            </button>
            <a href="{{ route('admin.flights.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection

