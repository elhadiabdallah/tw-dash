<x-app-layout>
    <x-slot name="header">
    <x-sub-item>Home</x-sub-item>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome to Dashboard Mr {{ auth()->user()->name }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
