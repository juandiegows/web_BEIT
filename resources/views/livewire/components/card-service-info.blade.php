<div class="">
    @if($type == 'end')
    <!-- Tipo end: El logo aparece a la derecha y el texto a la izquierda -->
    <section class="W-[100%] flex justify-end mb-32">
        <div class=" flex w-[100%] items-center pl-44">
            <div class=" w-[100%]">
                <div class="w-[50%] flex-col flex">
                    <h1 class="text-5xl text-txt-primary font-kanit font-bold leading-[.9]">{{ $name }}</h1>
                    <p class="text-txt-primary pb-4">{{ $description }}</p>
                    
                    <a href="{{ $url }}" class="bg-btn-segundary z-10 px-1 py-2 flex justify-center items-center w-48 font-kanit italic rounded-3xl gap-2 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_8px_10px_-2px_rgba(5,74,173,0.8)]"> Más Información
                        <img src="{{ asset('/img/service/arrow_circle_right.png') }}" class="w-7" alt="Flecha circular">
                    </a>
                    <div class="w-48 h-11 bg-[#064380] rounded-3xl mt-[-44px]"></div>
                </div>
            </div>
            <div class="w-72 relative">
                <div class="bg-btn-primary h-[24rem] rounded-s-[50px] relative flex justify-center items-center">
                    <img src="{{ asset($url_logo) }}" alt="{{ $name }} logo"         
                    class="absolute -left-40 w-[320px] max-w-max h-auto z-10">

                    <div class="flex gap-5">
                        <img src="{{ asset($url_image_blanco ?? '/img/service/defaultBlanco.png') }}" alt="{{ $name }} logo"         
                        class="rotate-40 w-[25px] ml-40">
                        <img src="{{ asset($url_image_normal ?? '/img/service/default.png') }}" alt="{{ $name }} logo"         
                        class="rotate-40 w-[25px] ml-0">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <!-- Tipo start: El logo aparece a la izquierda y el texto a la derecha -->
    <section class="W-[100%] flex justify-start mb-32">
        <div class=" flex w-[85%] items-center">
            <div class="w-52 relative">
                <div class="bg-btn-primary h-[24rem] rounded-e-[50px] relative flex justify-center items-center">
                    <img src="{{ asset($url_logo) }}" alt="{{ $name }} logo"         
                    class="absolute -right-36 w-[260px] max-w-max h-auto z-10">

                    <div class="flex gap-5 -ml-28">
                        <img src="{{ asset($url_image_blanco ?? '/img/service/defaultBlanco.png') }}" alt="{{ $name }} logo"         
                        class="rotate-0 w-[25px] ">
                        <img src="{{ asset($url_image_normal ?? '/img/service/default.png') }}" alt="{{ $name }} logo"         
                        class="rotate-0 w-[25px]">
                    </div>
                </div>
            </div>
            <div class=" w-[85%] pl-[15%] flex justify-start">
                <div class="w-[70%] flex-col flex">
                    <h1 class="text-5xl text-txt-primary font-kanit font-bold leading-[.9]">{{ $name }}</h1>
                    <p class="text-txt-primary pb-4">{{ $description }}</p>
                    
                    <a href="{{ $url }}" class="bg-btn-segundary px-1 py-2 flex justify-center items-center w-48 font-kanit italic rounded-3xl gap-2 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_8px_10px_-2px_rgba(5,74,173,0.8)] z-10"> Más Información
                        <img src="{{ asset('/img/service/arrow_circle_right.png') }}" class="w-7" alt="Flecha circular">
                    </a>
                    <div class="w-48 h-10 bg-[#064380] rounded-3xl mt-[-42px] "></div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
