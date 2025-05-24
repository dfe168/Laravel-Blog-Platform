@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? "$title - ": "" }} {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased">
    <x-banner></x-banner>

    @include('layouts.components.header')

    @yield('blogHead')

    <!-- Page Content -->
    <main class="p-5 flex h-full bg-gray-100 black">
        {{ $slot }}
    </main>

    @include('layouts.components.footer')

    @stack('modals')

    @livewireScripts
</body>

</html>