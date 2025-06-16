@extends('layouts.visitor')

@section('title', 'Proyectos')
@section('description', 'Nuestros proyectos destacados y casos de éxito.')
@section('keywords', 'proyectos, casos de éxito, trabajos realizados')
@section('author', 'Administrador del sitio')
@section('favicon', asset('svg/isotipo.jpg'))

@php
$headerStyle = 'centered';
@endphp

@section('header_title', 'Proyectos')

@section('content')
<section class="w-[60rem] mx-auto p-1 text-center ">
    <svg class="w-full" viewBox="0 0 800 120">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" 
              class="font-kanit font-extrabold text-3xl"
              fill="transparent" stroke="white" stroke-width="0.5">
            PROYECTOS
        </text>
    </svg>
</section>

<div class="flex justify-center items-center gap-40 flex-col  overflow-hidden text-txt-primary">
    <div class="w-[75rem]">
        
        <!-- Grid de proyectos -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pb-10">
            <!-- Proyecto 1 -->
           

            <div class="bg-white rounded-3xl shadow-lg overflow-hidden relative group">
                <div class="h-[30rem]">
                    <img src="{{ asset('img/proyecto/primero.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-[#054AAD] opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-5xl font-extrabold text-white">EDUCI</span>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden ">
                <div class="h-[30rem]">

                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden ">
                <div class="h-[30rem]">

                </div>
            </div>

            <div class="lg:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-[30rem]">

                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden ">
                <div class="h-[30rem]">

                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden ">
                <div class="h-[30rem]">

                </div>
            </div>

            <div class="lg:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-[30rem]">

                </div>
            </div>

          
        </div>
    </div>
</div>

<!-- Círculos decorativos -->
<!-- <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(--left, -0%)">
    <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #054AAD, transparent); transform: translate(-30%, -30%);"></div>
</div> -->

<!-- <div class="circule-container absolute top-0 left-0 " style="top: 0%; left: -10%;">
    <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #00D9EF, transparent); transform: translate(-20%, -20%);"></div>
</div> -->
<!-- 
<div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(--left, -0%)">
    <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #00D9EF, transparent); transform: translate(0%, 0%);"></div>
</div> -->


@endsection
