@extends('layouts.visitor') {{-- Extiende la plantilla base de visitante --}}

@section('title', 'Dashboard') {{-- Título personalizado para esta página --}}
@section('description', 'Bienvenido al panel de administración donde puedes gestionar todo.') {{-- Descripción personalizada --}}
@section('keywords', 'admin, dashboard, panel de administración') {{-- Palabras clave --}}
@section('author', 'Administrador del sitio') {{-- Autor personalizado --}}



@section('content')
<div class="flex justify-between overflow-hidden ">
    <section class="w-[40rem] p-5 ml-16 text-white font-kanit">

        <h1 class="font-kanit font-extrabold text-5xl ">
            LIDERA EL MUNDO TECNOLÓGICO CON NOSOTROS
        </h1>
        <p class="my-4 font-kanit font-semibold text-sm">
            Tenemos muchos clientes que confiaron en nosotros
        </p>
        <!-- Componentes Imgen -->
        <div class="flex items-center gap-4 mt-20 ">
            <div class="rounded-full relative flex flex-col items-center ">
                <img class="w-[10rem]  rounded-full object-cover" style="aspect-ratio: 1 / 1;" src="{{ asset('img/steve-jobs.jpg') }}" alt="" srcset="">
                <div class="bg-secondary text-5xl text-white rounded-full w-6 h-6 flex items-center justify-center absolute top-4 right-0">
                    <img class="w-[50%]  " src="{{ asset('svg/coma.svg') }}" alt="" srcset="">
                </div>
            </div>
            <p class="font-kanit w-80">
                La tecnología es solo una herramienta. En manos de las personas adecuadas, puede cambiar el mundo.
                <span class="font-thin italic">- Steve Jobs </span>
            </p>
        </div>

    </section>
    <section class="w-[60%] h-[90vh]  relative overflow-hidden">
        <img class="max-w-[100rem] absolute bottom-0 right-0 translate-x-[20%] translate-y-[55%] custom-shadow" src="{{ asset('img/world.png') }}" alt="">
        <img class="max-w-[30rem] absolute -top-20 right-20" src="{{ asset('img/personaje_lobo.png') }}" alt="">
     <p class="w-full  py-2 font-extrabold pl-[20%]  rounded-lg text-3xl  absolute bottom-0 bg-primary">SERVICIOS BEIT</p>
    </section>


    <div class="circule-container  -bottom-[68%] opacity-85 -right-[0%]">
        <div class="circle-gradient  w-[60vw] h-[60vw] "></div>
    </div>
    
</div>

@endsection
