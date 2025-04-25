<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Data -->
    <meta name="description" content="@yield('description', 'Descripción por defecto')">
    <meta name="keywords" content="@yield('keywords', 'default, keywords')">
    <meta name="author" content="@yield('author', 'Tu Nombre')">

    <!-- Title -->
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- Favicon -->
    <link rel="icon" href="@yield('favicon', asset('images/favicon.ico'))" type="image/x-icon">

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased bg-primary ">

    <header class="w-full flex justify-between items-start p-5">
        <img class="w-20" src="{{ asset('svg/logo.svg') }}" alt="logo">
        <nav class="flex gap-8 text-txt-primary items-center">
            <a class="txt-primary no-underline flex items-center" href="">Inicio</a>
            <a class=" no-underline flex items-center" href="">Nosotros</a>
            <a class=" no-underline flex items-center" href="">Servicios</a>
            <a class=" no-underline flex items-center" href="">Proyectos</a>
            <a class=" no-underline flex items-center" href="">Contáctanos</a>
            <a class=" bg-btn-primary rounded-full px-5 py-2" href="">Tienda Virtual</a>
        </nav>
    </header>


    <!-- Page Content -->
    <main>
        @yield('content')
    </main>


    @stack('modals')

    @livewireScripts
</body>
</html>
