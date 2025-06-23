@extends('layouts.visitor')

@section('title', 'Nosotros')
@section('description', 'Información sobre nosotros y nuestra misión.')
@section('keywords', 'nosotros, misión, visión, empresa')
@section('author', 'Administrador del sitio')
@section('favicon', asset('svg/Recurso.svg'))

@php
$headerStyle = 'centered';
@endphp

@section('header_title', 'Sobre Nosotros')

@section('custom_header')
@endsection

@section('content')
<script src="{{ asset('/resources/js/slider.js') }}"></script>
<section class="w-[60rem] mx-auto p-1 text-center ">
    <svg class="w-full" viewBox="0 0 800 120">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" 
              class="font-kanit font-extrabold text-3xl"
              fill="transparent" stroke="white" stroke-width="0.5">
            SOBRE NOSOTROS
        </text>
    </svg>
</section>

<div class="flex justify-center items-center gap-40 flex-col  overflow-hidden text-txt-primary">


<section class="w-[75rem] h-[23rem] flex justify-center gap-10">
    <div class="w-[40%] flex flex-col justify-end">
        <h2 class="font-kanit font-extrabold text-2xl md:text-3xl lg:text-4xl">QUIÉNES SOMOS</h2>
        <p class="font-kanit font-normal text-sm md:text-lg lg:text-lg">En Blue Eyes Innovation Tech, creemos que cada punto de contacto es una oportunidad para hacer algo memorable. Desde el asesoramiento personalizado hasta el soporte posventa, nuestro equipo está comprometido a proporcionar una experiencia que no solo cumpla, sino que exceda la necesidad y expectativas de nuestros clientes. </p>
    </div>
    <div class="w-[50%]">
        <img src="{{ asset('img/Nosotros/Nosostros.png') }}" alt="">

    </div>
</section>



<section class="w-[75rem] h-[24rem] flex justify-center gap-20">
    <div class="w-[50%]">
        <img src="{{ asset('img/Nosotros/Mision.png') }}" alt="">

    </div>
    <div class="w-[40%] flex flex-col justify-end">
        <h2 class="font-kanit font-extrabold text-2xl md:text-3xl lg:text-4xl">MISIÓN</h2>
        <p class="font-kanit font-normal text-md md:text-lg lg:text-lg">Transformar el panorama tecnológico a través de soluciones innovadoras y productos de vanguardia, facilitando así el acceso a la tecnología avanzada para todos nuestros clientes. En Blue Eyes Innovation Tech, nos dedicamos a superar las expectativas, asegurando que cada interacción y transacción sea sinónimo de calidad, confiabilidad y excelencia.</p>
    </div>
   
</section>

<section class="w-[75rem] h-[24rem] flex justify-center gap-10">
    <div class="w-[40%] flex flex-col justify-end">
        <h2 class="font-kanit font-extrabold text-2xl md:text-3xl lg:text-4xl">VISION</h2>
        <p class="font-kanit font-normal text-sm md:text-lg lg:text-lg">Ser el socio tecnológico preferido de nuestros clientes, anticipando sus necesidades y proporcionando soluciones personalizadas que superen sus expectativas, construyendo relaciones duraderas basadas en la confianza y la excelencia. </p>
    </div>
    <div class="w-[50%]">
        <img src="{{ asset('img/Nosotros/Vision.png') }}" alt="">

    </div>
</section>


<section class="w-[75rem] h-[24rem] flex justify-center gap-20">
    <div class="w-[50%]">
        <img src="{{ asset('img/Nosotros/Mision.png') }}" alt="">

    </div>
    <div class="w-[40%] flex flex-col justify-end">
        <h2 class="font-kanit font-extrabold text-2xl md:text-3xl lg:text-4xl">VALORES</h2>
        <p class="font-kanit text-2xl md:text-lg lg:text-lg py-1 px-3 w-[13rem] text-center rounded-full mb-3" style="background: linear-gradient(to right, #054AAD, #00D9EF);">Innovación</p>
        <p class="font-kanit text-2xl md:text-lg lg:text-lg py-1 px-3 w-[13rem] text-center rounded-full mb-3" style="background: linear-gradient(to right, #054AAD, #00D9EF);">Integridad</p>
        <p class="font-kanit text-2xl md:text-lg lg:text-lg py-1 px-3 w-[13rem] text-center rounded-full mb-3" style="background: linear-gradient(to right, #054AAD, #00D9EF);">Calidad</p>
        <p class="font-kanit text-2xl md:text-lg lg:text-lg py-1 px-3 w-[13rem] text-center rounded-full mb-3" style="background: linear-gradient(to right, #054AAD, #00D9EF);">Colaboración</p>
    </div>
   
</section>



<section class="w-[60rem] relative mx-auto mb-[10rem]">
    <div class="slider-container w-full overflow-hidden shadow-none bg-white rounded-[3.5rem] p-6">
        <div class="slider-content">
            <div class="slide active">
                <div class="flex h-full">
                    <div class="w-[70%] flex flex-col justify-center p-4 text-primary">
                        <h3 class="font-kanit font-bold text-2xl">Mauro Chiri</h3>
                        <p class="font-kanit text-lg text-gray-600">Dentista Principal</p>
                        <p class="font-kanit text-lg text-gray-600">Denti Salud</p>
                        <p class="font-kanit text-base mt-2">Increible servicio y atención! Esta empresa de software superó nuestras expectativas con soluciones innovadoras y soporte excepcional. 100% recomendada para cualquier proyecto tecnológico.</p>
                    </div>
                    <div class="w-[30%] flex items-center justify-center">
                        <img src="{{ asset('img/testimonials/mauro-chiri.jpg') }}" alt="Mauro Chiri" class="max-h-full max-w-full object-contain rounded-lg">
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="flex h-full">
                    <div class="w-[70%] flex flex-col justify-center p-4 text-primary">
                        <h3 class="font-kanit font-bold text-2xl">Nombre 2</h3>
                        <p class="font-kanit text-lg text-gray-600">Cargo 2</p>
                        <p class="font-kanit text-lg text-gray-600">Empresa 2</p>
                        <p class="font-kanit text-base mt-2">Comentario o feedback sobre el servicio o producto.</p>
                    </div>
                    <div class="w-[30%] flex items-center justify-center">
                        <img src="{{ asset('img/testimonials/placeholder2.jpg') }}" alt="Nombre 2" class="max-h-full max-w-full object-contain rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="prev absolute left-[-3rem] top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full w-10 h-10 flex items-center justify-center">&#10094;</button>
    <button class="next absolute right-[-3rem] top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full w-10 h-10 flex items-center justify-center">&#10095;</button>
</section>

<style>
    .slide {
        display: none;
    }
    .slide.active {
        display: block;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        let currentSlide = 0;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        prevButton.addEventListener('click', function() {
            showSlide(currentSlide - 1);
        });

        nextButton.addEventListener('click', function() {
            showSlide(currentSlide + 1);
        });

        // Mostrar el primer slide al cargar
        showSlide(0);
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Slider script loaded');
    
    // Verificar si el contenedor del slider existe
    const sliderContainer = document.querySelector('.slider-container');
    if (!sliderContainer) {
        console.error('No se encontró el contenedor del slider');
        return;
    }

    // Obtener elementos del slider
    const slides = sliderContainer.querySelectorAll('.slide');
    const prevButton = sliderContainer.querySelector('.prev');
    const nextButton = sliderContainer.querySelector('.next');
    
    if (!slides.length || !prevButton || !nextButton) {
        console.error('No se encontraron elementos necesarios para el slider');
        return;
    }

    // Configuración inicial
    let currentIndex = 0;
    const totalSlides = slides.length;
    console.log('Slides encontrados:', slides.length);

    // Función para inicializar el slider
    function initializeSlider() {
        slides.forEach((slide, index) => {
            slide.style.display = index === currentIndex ? 'block' : 'none';
        });
    }

    // Función para actualizar el slider
    function updateSlider() {
        slides.forEach((slide, index) => {
            slide.style.display = index === currentIndex ? 'block' : 'none';
        });
    }

    // Eventos de navegación
    prevButton.addEventListener('click', function(e) {
        e.preventDefault();
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
        console.log('Prev clicked, new index:', currentIndex);
        updateSlider();
    });

    nextButton.addEventListener('click', function(e) {
        e.preventDefault();
        currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
        console.log('Next clicked, new index:', currentIndex);
        updateSlider();
    });

    // Inicializar el slider
    initializeSlider();
});
</script>



<section class="w-[60rem] p-1 text-center mb-[-10rem]">
    <svg class="w-full" viewBox="0 0 800 120">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" 
              class="font-kanit font-extrabold text-3xl"
              fill="transparent" stroke="white" stroke-width="0.5">
            TESTIMONIOS
        </text>
    </svg>
</section>

    
    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(--left, -0%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #054AAD, transparent); transform: translate(-30%, -30%);"></div>
    </div>

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); right: var(--right, 10%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #01BCEA, transparent); transform: translate(30%, -30%);"></div>
    </div>

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 60%); right: var(--right, 20%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #064380, transparent); transform: translate(30%, -30%);"></div>
    </div>

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 70rem); left: var(--left, 0%)">
        <div class="circle-gradient w-[80rem] h-[80rem] " style="background: radial-gradient(circle, #00D9EF, transparent); transform: translate(-10%, -10%);"></div>
    </div>
</div>

<script src="{{ asset('js/slider.js') }}"></script>
@endsection
