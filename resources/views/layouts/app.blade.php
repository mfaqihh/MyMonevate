<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gradient-to-br from-indigo-200 via-white to-blue-200">
        <x-banner />

        <div x-data="{ openSidebar: false, openDropdown: false }">
            {{-- Sidebar mobile --}}
            @include('components.sidebar-mobile')
    
            {{-- Desktop Sidebar --}}
            @include('components.sidebar')
    
            {{-- Page content --}}
            <div class="lg:pl-72">
    
                {{-- Navbar --}}
                @include('components.navbar')
    
                {{-- Main content --}}
                <main class="py-10 min-h-screen">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
