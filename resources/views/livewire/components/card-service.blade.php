<div class="group w-full  relative text-txt-primary text-center flex flex-col items-center justify-center z-10 cursor-pointer">
    <img class="w-full rounded-lg overflow-hidden" src="{{ $url }}" :alt="{{ $name }}">

    <!-- Fondo que cambia opacidad al hacer hover -->
    <div class="w-full absolute inset-0 bg-primary/60 group-hover:bg-primary/80 transition-all duration-300"></div>

    <div class="w-[90%] h-[90%] rounded-lg m-auto absolute inset-0 border border-white"></div>

    <div class="absolute font-kanit bottom-[18%]  z-20 mx-auto flex flex-col items-center transition-all duration-500">
        <!-- Título siempre visible pero que se mueve al hacer hover -->
        <p class="text-2xl w-[80%]  font-semibold transform transition-all duration-500 translate-y-4 group-hover:translate-y-0">
            {{ $name }}
        </p>

        <!-- Descripción aparece con animación -->
        <p class="w-[80%] text-left mx-auto mt-2 text-1xl opacity-0 translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
            {{ $description }}
        </p>
    </div>
</div>

