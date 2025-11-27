@extends('layouts.admin')

@section('title', 'Manage Hotels')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Hotels</h1>
    <a href="{{ route('admin.hotels.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
        + Add New Hotel
    </a>
</div>

@if($hotels->isEmpty())
    <div class="bg-white rounded-lg shadow p-8 text-center">
        <p class="text-gray-500 text-lg mb-4">No hotels found. Add your first hotel!</p>
        <a href="{{ route('admin.hotels.create') }}" class="inline-block bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
            + Add New Hotel
        </a>
    </div>
@else
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($hotels as $hotel)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset($hotel->image) }}" alt="{{ $hotel->name }}" class="h-12 w-20 object-cover rounded">
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $hotel->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $hotel->location }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">⭐ {{ $hotel->rating }} ({{ $hotel->reviews }})</td>
                    <td class="px-6 py-4 text-sm font-semibold text-sky-600">{{ $hotel->price }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($hotel->is_active)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('admin.hotels.edit', $hotel) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <form action="{{ route('admin.hotels.destroy', $hotel) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection

