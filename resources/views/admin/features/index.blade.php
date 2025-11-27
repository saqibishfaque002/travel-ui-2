@extends('layouts.admin')

@section('title', 'Manage Features')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Features</h1>
    <a href="{{ route('admin.features.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
        + Add New Feature
    </a>
</div>

@if($features->isEmpty())
    <div class="bg-white rounded-lg shadow p-8 text-center">
        <p class="text-gray-500 text-lg mb-4">No features found. Add your first feature!</p>
        <a href="{{ route('admin.features.create') }}" class="inline-block bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
            + Add New Feature
        </a>
    </div>
@else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($features as $feature)
        <div class="bg-white rounded-lg shadow hover:shadow-xl transition-shadow p-6 text-center">
            <div class="text-5xl mb-4">{{ $feature->icon }}</div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $feature->title }}</h3>
            <p class="text-sm text-gray-600 mb-4">{{ $feature->description }}</p>
            
            <div class="mb-4">
                @if($feature->is_active)
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                @endif
            </div>

            <div class="flex gap-2">
                <a href="{{ route('admin.features.edit', $feature) }}" class="flex-1 text-center bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-2 rounded text-sm font-semibold transition">
                    Edit
                </a>
                <form action="{{ route('admin.features.destroy', $feature) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded text-sm font-semibold transition">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection

