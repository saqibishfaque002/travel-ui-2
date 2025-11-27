<x-auth-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(auth()->user()->is_admin)
                        <div class="mb-4">
                            <p class="text-lg font-semibold mb-2">Welcome, Admin!</p>
                            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-4 py-2 bg-sky-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-700 focus:bg-sky-700 active:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Go to Admin Panel
                            </a>
                        </div>
                    @else
                        <p>{{ __("You're logged in!") }}</p>
                        <p class="mt-2"><a href="{{ route('home') }}" class="text-sky-600 hover:underline">← Back to Website</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
