@extends('layouts.admin')

@section('title', 'Manage Packages')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Travel Packages</h1>
    <a href="{{ route('admin.packages.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
        + Add New Package
    </a>
</div>

@if($packages->isEmpty())
    <div class="bg-white rounded-lg shadow p-8 text-center">
        <p class="text-gray-500 text-lg mb-4">No packages found. Add your first package!</p>
        <a href="{{ route('admin.packages.create') }}" class="inline-block bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
            + Add New Package
        </a>
    </div>
@else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($packages as $package)
        <div class="bg-white rounded-lg shadow hover:shadow-xl transition-shadow overflow-hidden">
            <img src="{{ asset($package->image) }}" alt="{{ $package->name }}" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $package->name }}</h3>
                <p class="text-sm text-gray-600 mb-2">📍 {{ $package->location }}</p>
                <p class="text-sm text-gray-600 mb-2">📅 {{ $package->duration }}</p>
                <p class="text-sm text-gray-600 mb-2">👥 {{ $package->people }}</p>
                <p class="text-2xl font-bold text-sky-600 mb-4">{{ $package->price }}</p>
                
                <div class="mb-4">
                    <p class="text-sm font-semibold text-gray-700 mb-1">Features:</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        @foreach($package->features as $feature)
                        <li>✓ {{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-4">
                    @if($package->is_active)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                    @endif
                </div>

                <div class="flex gap-2">
                    <a href="{{ route('admin.packages.edit', $package) }}" class="flex-1 text-center bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-semibold transition">
                        Edit
                    </a>
                    <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection

