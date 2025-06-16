@extends('layouts.visitor')

@section('title', 'Contáctanos')
@section('description', 'Página de contacto para comunicarte con nosotros.')
@section('keywords', 'contacto, comunicación, información de contacto')
@section('author', 'Administrador del sitio')
@section('favicon', asset('svg/Recurso.svg'))

@php
$headerStyle = 'centered';
@endphp

@section('header_title', 'Contacto')

@section('content')
<section class="w-[60rem] mx-auto p-1 text-center ">
    <svg class="w-full" viewBox="0 0 800 120">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" 
              class="font-kanit font-extrabold text-3xl"
              fill="transparent" stroke="white" stroke-width="0.5">
              CONTÁCTANOS
        </text>
    </svg>
</section>

<div class="flex justify-center items-center gap-40 flex-col overflow-hidden text-txt-primary">
    <div class="w-[75rem]">
        <div class=" rounded-3xl p-8 ">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pl-20">
                <!-- Formulario de contacto -->
                <div>
                <h1 class="text-3xl font-extrabold mb-4 ">Comunícate con nosotros</h1>
                    <form action="{{ route('contacto.send') }}" method="POST" class="space-y-6 w-[80%] max-w-[40rem]">
                        @csrf
                        <div>
                            <input type="text" id="name" name="name" placeholder="Nombre*" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-primary" required>
                        </div>
                        <div>
                            <input type="email" id="email" name="email" placeholder="Email*" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-primary" required>
                        </div>
                        <div>
                            <input type="text" id="subject" name="subject" placeholder="Asunto*" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-primary" required>
                        </div>
                        <div>
                            <textarea id="message" name="message" rows="4" placeholder="Mensaje*" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-primary" required></textarea>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="bg-white text-primary px-20 py-2 rounded-lg hover:bg-blue-700 hover:border-white hover:border-2 hover:text-white transition-colors">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
                
                <!-- Información de contacto -->
                <div class="space-y-6">
                                       
                    <div class="space-y-6 mt-14">
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-4">
                                <img src="{{ asset('img/contacto/ubicacion.png') }}" alt="Ubicación" class="w-6 h-6 self-start mt-1">
                                <h2 class="text-white font-extrabold text-xl">Dirección</h2>
                            </div>
                            <div>
                                <p class="text-white pl-10">Av Nogales 251, El Agustino, Lima - Perú</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-4">
                                <img src="{{ asset('img/contacto/email.png') }}" alt="Correo" class="w-6 h-6 self-start mt-1">
                                <h2 class="text-white font-extrabold text-xl">Correo</h2>
                            </div>
                            <div>
                                <p class="text-white pl-10">ventas@beitperu.com</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-4">
                                <img src="{{ asset('img/contacto/telefono.png') }}" alt="Telefono" class="w-6 h-6 self-start mt-1">
                                <h2 class="text-white font-extrabold text-xl">Llamada</h2>
                            </div>
                            <div>
                                <p class="text-white pl-10">935 099 830</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <div class="flex gap-4">
                                <img src="{{ asset('img/contacto/siguenos.png') }}" alt="Telefono" class="w-6 h-6 self-start mt-1">
                                <h2 class="text-white font-extrabold text-xl">Síguenos</h2>
                            </div>
                            <div class="flex gap-4 pl-10">
                               <img src="{{ asset('img/contacto/instagram.png') }}" alt="Instagram" class="w-6 h-6 self-start mt-1">
                               <img src="{{ asset('img/contacto/facebook.png') }}" alt="Facebook" class="w-6 h-6 self-start mt-1">
                               <img src="{{ asset('img/contacto/linkend.png') }}" alt="Twitter" class="w-6 h-6 self-start mt-1">
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Círculos decorativos -->
<div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(--left, -0%)">
    <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #054AAD, transparent); transform: translate(-30%, -30%);"></div>
</div>
@endsection
