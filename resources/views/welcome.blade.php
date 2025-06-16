@extends('layouts.visitor') {{-- Extiende la plantilla base de visitante --}}

@section('title', 'Inicio') {{-- Título personalizado para esta página --}}
@section('description', 'Bienvenido al panel de administración donde puedes gestionar todo.') {{-- Descripción personalizada --}}
@section('keywords', 'admin, dashboard, panel de administración') {{-- Palabras clave --}}
@section('author', 'Administrador del sitio') {{-- Autor personalizado --}}
@section('favicon', asset('svg/lobito.svg'))


@section('content')
<div class="flex  justify-between overflow-hidden  text-txt-primary">
    <section class="w-[40rem]  pt-[8%] p-5 ml-16 text-white font-kanit">

        <h1 class="font-kanit font-extrabold text-6xl ">
            LIDERA EL MUNDO TECNOLÓGICO CON NOSOTROS
        </h1>
        <p class="my-4 font-kanit font-semibold text-xl">
            Tenemos muchos clientes que <br> confiaron en nosotros
        </p>
        <!-- Componentes Imgen -->
        <div class="flex items-center gap-4 mt-20 ">
            <div class="rounded-full relative flex flex-col items-center ">
                <img class="w-[6rem] rounded-full object-cover cursor-pointer" style="aspect-ratio: 1 / 1;" src="{{ asset('img/steve-jobs.jpg') }}" alt="" srcset="" onclick="toggleText()">
                <div class="bg-secondary text-5xl text-white rounded-full w-6 h-6 flex items-center justify-center absolute top-4 right-0">
                    <img class="w-[50%]  " src="{{ asset('svg/coma.svg') }}" alt="" srcset="">
                </div>
            </div>
            <p id="quoteText" class="font-kanit w-80 hidden">
                La tecnología es solo una herramienta. En manos de las personas adecuadas, puede cambiar el mundo.
                <span class="font-thin italic">- Steve Jobs </span>
            </p>
        </div>

    </section>
    <section class="w-[60%] h-[95vh] min-h-[58rem]  relative overflow-hidden ">
        <img class="w-full min-w-[80rem] max-w-[100rem] absolute bottom-0 right-0 translate-x-[20%] translate-y-[55%] custom-shadow" src="{{ asset('img/world.png') }}" alt="">
        <img class="max-w-[30rem] absolute bottom-[48%] right-[10%]" src="{{ asset('img/LogoInicio.png') }}" alt="">
        <p class="w-full translate-x-4 py-2 font-extrabold pl-[20%]  rounded-lg text-3xl font-kanit  absolute bottom-0 bg-primary">SERVICIOS BEIT</p>
    </section>



    <div class="circule-container  -bottom-[68%] opacity-85 -right-[0%]">
        <div class="circle-gradient  w-[60vw] h-[60vw] "></div>
    </div>

</div>
<section class="w-[80%] mx-auto p-4 my-12 flex flex-wrap gap-4 justify-center">
    @foreach ($services as $service)
    <div class="w-[24%] min-w-[18rem]">
        <livewire:components.card-service :name="$service->name" :url="$service->url_image" :description="$service->description" />
    </div>
    @endforeach

</section>
<section class="w-[80%] my-4 ">
    <h1 class="w-full -translate-x-4 custom-shadow text-txt-primary   py-2 font-bold pr-[20%] text-right rounded-lg text-3xl  font-kanit bg-primary">COMUNICADOS BEIT</h1>
</section>

<livewire:components.gallery :images="[
    'announce/announce_1.png',
    'announce/announce_1.png',
    'announce/announce_1.png',
    'announce/announce_2.png',
    'announce/announce_3.png',
    'announce/announce_1.png',
    'announce/announce_2.png',
    'announce/announce_3.png'
]" />

<livewire:components.partners />

<script>
function toggleText() {
    const text = document.getElementById('quoteText');
    text.classList.toggle('hidden');
}
</script>
@endsection
