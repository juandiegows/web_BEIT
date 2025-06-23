<footer class="bg-primary pt-[7rem]  text-white relative">
<img src="{{ asset('img/footer/arboles.png') }}" alt="" class="absolute -top-52 left-0 ">
<img src="{{ asset('img/footer/lobo.png') }}" alt="" class="absolute -top-60 right-40 ">
    <div class="container mx-auto flex flex-col items-center px-4 ">
        <div class="flex flex-col gap-4 items-center">
            <h1 class="font-kanit font-extrabold text-2xl md:text-3xl lg:text-4xl">Suscríbete para más promociones</h1>
            <form action="" class="flex">
                <input class="w-[25rem] p-3 border bg-white/50 rounded-l-lg font-kanit font-normal text-white placeholder:text-white border-r-0" type="email" placeholder="Correo electrónico">
                <button class="bg-[#0D3074] w-[12rem] text-start text-white p-2 rounded-r-lg" type="submit">Suscríbase ahora</button>
            </form>

            <hr class="text-white border w-full mt-10 mb-4">

            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 w-full mt-8 ">
                <div>
                    <h3 class="text-2xl font-bold mb-4 ">Inicio</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-cyan-400">Servicios</a></li>
                        <li><a href="{{ route('home') }}" class="hover:text-cyan-400">Comunicados</a></li>
                        <li><a href="{{ route('home') }}" class="hover:text-cyan-400">Partners</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">Nosotros</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('nosotros') }}" class="hover:text-cyan-400">¿Quiénes Somos?</a></li>
                        <li><a href="{{ route('nosotros') }}" class="hover:text-cyan-400">Misión</a></li>
                        <li><a href="{{ route('nosotros') }}" class="hover:text-cyan-400">Visión</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">Servicios</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('servicios') }}" class="hover:text-cyan-400">Ciberseguridad</a></li>
                        <li><a href="{{ route('servicios') }}" class="hover:text-cyan-400">Desarrollo Web</a></li>
                        <li><a href="{{ route('servicios') }}" class="hover:text-cyan-400">Marketing Digital</a></li>
                        <li><a href="{{ route('servicios') }}" class="hover:text-cyan-400">Infraestructure</a></li>
                        <li><a href="{{ route('servicios') }}" class="hover:text-cyan-400">IT & Outsourcing</a></li>
                        <li><a href="{{ route('servicios') }}" class="hover:text-cyan-400">Eventos Tech</a></li>
                        <li><a href="{{ route('servicios') }}" class="hover:text-cyan-400">Equipamiento IT</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">BEIT Shop</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-cyan-400">Individuales</a></li>
                        <li><a href="#" class="hover:text-cyan-400">Celulares</a></li>
                        <li><a href="#" class="hover:text-cyan-400">Audífonos</a></li>
                        <li><a href="#" class="hover:text-cyan-400">Empresas</a></li>
                        <li><a href="#" class="hover:text-cyan-400">Cámaras</a></li>
                        <li><a href="#" class="hover:text-cyan-400">Licencias</a></li>
                    </ul>
                </div>
                <div class="flex items-center justify-center row-span-2 min-h-[150px]">
                    <div class="text-center">
                        <div class="flex justify-center items-center w-full">
                            <img src="{{ asset('img/LogoFootter.png') }}" alt="BEIT Logo" class="w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-10 text-start w-full  pt-2 text-left text-sm text-white">
            <p> Todos los derechos reservados. Hecho por Beit Perú {{ date('Y') }}</p>
        </div>
    </div>
</footer>
