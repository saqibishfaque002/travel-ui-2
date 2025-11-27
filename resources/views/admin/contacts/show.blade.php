@extends('layouts.admin')

@section('title', 'View Contact Submission')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.contacts.index') }}" class="text-sky-600 hover:text-sky-800">← Back to Contacts</a>
    <h1 class="text-3xl font-bold text-gray-800 mt-2">Contact Submission Details</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <div class="mb-6">
        @if($contact->is_read)
            <span class="px-3 py-1 inline-flex text-sm font-semibold rounded-full bg-gray-100 text-gray-800">Read</span>
        @else
            <span class="px-3 py-1 inline-flex text-sm font-semibold rounded-full bg-blue-100 text-blue-800">Unread (Just Marked as Read)</span>
        @endif
    </div>

    <div class="grid grid-cols-2 gap-6 mb-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <p class="text-lg text-gray-900">{{ $contact->name }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <p class="text-lg text-gray-900">
                <a href="mailto:{{ $contact->email }}" class="text-sky-600 hover:text-sky-800">
                    {{ $contact->email }}
                </a>
            </p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Submitted</label>
            <p class="text-lg text-gray-900">{{ $contact->created_at->format('M d, Y \a\t h:i A') }}</p>
            <p class="text-sm text-gray-500">{{ $contact->created_at->diffForHumans() }}</p>
        </div>
    </div>

    <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
            <p class="text-gray-900 whitespace-pre-wrap">{{ $contact->message }}</p>
        </div>
    </div>

    <div class="flex gap-4">
        <a href="mailto:{{ $contact->email }}?subject=Re: Your Contact Submission" 
           class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 rounded-lg font-semibold transition">
            📧 Reply via Email
        </a>
        
        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this contact submission?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                🗑️ Delete
            </button>
        </form>
        
        <a href="{{ route('admin.contacts.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition">
            ← Back to List
        </a>
    </div>
</div>
@endsection

