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
    <link href="{{ mix('css/card-effect.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="font-sans antialiased bg-primary ">
    @livewire('navigation')

    @if(!isset($headerStyle) || $headerStyle !== 'centered')
    <header class="w-full max-w-full flex justify-between items-center p-5 relative z-50" x-data="{ open: false }">
        <img class="w-10 md:w-15 mdx:w-20" src="{{ asset('svg/logo.svg') }}" alt="logo">
        <a @click="open = false"
        class="md:hidden font-extrabold text-white text-nowrap px-6 py-2 rounded-full bg-btn-primary shadow-[0_0_25px_#00D9EF] hover:shadow-[0_0_35px_#00D9EF] transition-all duration-300"
        href="#">
        Tienda Virtual
     </a>
        <!-- Botón hamburguesa -->
        <button @click="open = !open" class="md:hidden z-50 text-white">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Menú de navegación -->
        <nav :class="{ 'translate-x-0': open, 'translate-x-full': !open }"
        class="fixed text-lg top-0 right-0 w-[60%] min-w-[200px] h-screen bg-blue-primary lg:bg-primary text-white transform transition-transform duration-300 ease-in-out
        flex flex-col items-center pt-[25%] px-[10%] gap-6
        md:static md:h-auto md:w-auto md:bg-transparent md:text-txt-primary md:flex-row md:translate-x-0 md:gap-8 md:justify-end md:items-center md:px-0 md:pt-0">
       
       <a @click="open = false" class="w-full text-lg font-extrabold text-right no-underline {{ Route::currentRouteName() == 'home' ? 'text-[#00D9EF]' : '' }}" href="{{ route('home') }}" data-route="home">Inicio</a>
       <a @click="open = false" class="w-full font-extrabold text-right no-underline {{ Route::currentRouteName() == 'nosotros' ? 'text-[#00D9EF]' : '' }}" href="{{ route('nosotros') }}" data-route="nosotros">Nosotros</a>
       <a @click="open = false" class="w-full font-extrabold text-right no-underline {{ Route::currentRouteName() == 'servicios' ? 'text-[#00D9EF]' : '' }}" href="{{ route('servicios') }}" data-route="servicios">Servicios</a>
       <a @click="open = false" class="w-full font-extrabold text-right no-underline {{ Route::currentRouteName() == 'proyectos' ? 'text-[#00D9EF]' : '' }}" href="{{ route('proyectos') }}" data-route="proyectos">Proyectos</a>
       <a @click="open = false" class="w-full font-extrabold text-right no-underline {{ Route::currentRouteName() == 'contacto' ? 'text-[#00D9EF]' : '' }}" href="{{ route('contacto') }}" data-route="contacto">Contáctanos</a>
   
       <a @click="open = false"
          class="bg-shadow font-extrabold md:bg-btn-primary text-nowrap text-btn-primary md:text-white rounded-full px-6 py-2 self-end"
          href="#">Tienda Virtual</a>
   </nav>
    </header>
    @else
    <header class="w-[58rem] bg-white shadow-md py-2 px-8 flex justify-between items-center mb-8 rounded-full mx-auto mt-4 flex-wrap gap-4 md:gap-6">
        <img class="w-10 md:w-15 mdx:w-16" src="{{ asset('svg/logoBlanco.svg') }}" alt="logo">
        <nav class="flex flex-wrap justify-center items-center gap-3 md:gap-9 text-base md:text-lg font-extrabold">
            <a @click="open = false" class="text-gray-800 hover:text-blue-600 no-underline {{ Route::currentRouteName() == 'home' ? 'text-[#00D9EF]' : '' }}" href="{{ route('home') }}" data-route="home">Inicio</a>
            <a @click="open = false" class="text-gray-800 hover:text-blue-600 no-underline {{ Route::currentRouteName() == 'nosotros' ? 'text-[#00D9EF]' : '' }}" href="{{ route('nosotros') }}" data-route="nosotros">Nosotros</a>
            <a @click="open = false" class="text-gray-800 hover:text-blue-600 no-underline {{ Route::currentRouteName() == 'servicios' ? 'text-[#00D9EF]' : '' }}" href="{{ route('servicios') }}" data-route="servicios">Servicios</a>
            <a @click="open = false" class="text-gray-800 hover:text-blue-600 no-underline {{ Route::currentRouteName() == 'proyectos' ? 'text-[#00D9EF]' : '' }}" href="{{ route('proyectos') }}" data-route="proyectos">Proyectos</a>
            <a @click="open = false" class="text-gray-800 hover:text-blue-600 no-underline {{ Route::currentRouteName() == 'contacto' ? 'text-[#00D9EF]' : '' }}" href="{{ route('contacto') }}" data-route="contacto">Contáctanos</a>
            <a @click="open = false" class="bg-btn-primary text-white rounded-full px-4 md:px-10 py-2 hover:bg-blue-700 transition-all duration-300 no-underline text-nowrap" href="#">Tienda Virtual</a>
        </nav>
    </header>
    @endif

    @yield('custom_header')

    <main>
        @yield('content')
    </main> 


    @stack('modals')

    @livewireScripts
    <script src="{{ asset('js/slider.js') }}"></script>
</body>
</html>
