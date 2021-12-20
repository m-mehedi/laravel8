<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <h1>Welcome {{ Auth::user()->email }}</h1>
        </h2>
    </x-slot>

</x-app-layout>
