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
                        <img src="/img/service/arrow_circle_right.png" class="w-7" alt="Flecha circular">
                    </a>
                    <div class="w-48 h-11 bg-[#064380] rounded-3xl mt-[-44px]"></div>
                </div>
            </div>
            <div class="w-72 relative">
                <div class="bg-btn-primary h-[24rem] rounded-s-[50px] relative flex justify-center items-center">
                    <img src="{{ $url_logo }}" alt="{{ $name }} logo"         
                    class="absolute -left-40 w-[320px] max-w-max h-auto z-10">

                    <div class=" absolute -right-28 flex-col -rotate-90">
                        <h1 class="font-kanit text-txtPrimary text-[33px] font-bold text-center">{{ $name }}</h1>
                        
                        <svg class="w-full" viewBox="0 0 800 120">
                            <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" 
                                class="font-kanit font-extrabold text-[85px]"
                                fill="transparent" stroke="white" stroke-width="0.5">
                                {{ $name }}
                            </text>
                        </svg>
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
                <div class="bg-btn-primary h-[24rem] rounded-e-[50px] relative flex justify-center items-center border">
                    <img src="{{ $url_logo }}" alt="{{ $name }} logo"         
                    class="absolute -right-36 w-[260px] max-w-max h-auto z-10">

                    <div class=" absolute -left-28 flex-col -rotate-90">
                        <svg class="w-full" viewBox="0 0 800 120">
                            <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" 
                                class="font-kanit font-extrabold text-[78px]"
                                fill="transparent" stroke="white" stroke-width="0.5">
                                {{ $name }}
                            </text>
                        </svg>

                        <h1 class="font-kanit text-txtPrimary text-3xl font-bold text-center">{{ $name }}</h1>
                    </div>
                </div>
            </div>
            <div class=" w-[85%] pl-[15%] flex justify-start">
                <div class="w-[70%] flex-col flex">
                    <h1 class="text-5xl text-txt-primary font-kanit font-bold leading-[.9]">{{ $name }}</h1>
                    <p class="text-txt-primary pb-4">{{ $description }}</p>
                    
                    <a href="{{ $url }}" class="bg-btn-segundary px-1 py-2 flex justify-center items-center w-48 font-kanit italic rounded-3xl gap-2 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_8px_10px_-2px_rgba(5,74,173,0.8)] z-10"> Más Información
                        <img src="/img/service/arrow_circle_right.png" class="w-7" alt="Flecha circular">
                    </a>
                    <div class="w-48 h-10 bg-[#064380] rounded-3xl mt-[-42px] "></div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
