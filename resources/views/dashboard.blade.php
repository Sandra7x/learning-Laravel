<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            {{ __(date("l jS \of F Y")) }}
        </h2>
    </x-slot>

    <div class="py-12">
        @yield('content')
    </div>
</x-app-layout>
