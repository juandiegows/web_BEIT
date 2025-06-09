<div class="w-[80%] mx-auto my-12">
    <h1 class="w-full  text-txt-primary py-2 font-bold  text-center pt-[8%] rounded-lg text-3xl font-kanit ">NUESTROS PARTNERS</h1>
    
    <div class="flex flex-wrap justify-center gap-8 mt-8">
        @foreach($partners as $partner)
            <div class="w-[200px] cursor-pointer h-[100px] rounded-lg flex items-center justify-center group relative">
                <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}" style="width: {{ $partner['width'] ?? '80%' }} !important; height: {{ $partner['height'] ?? '40%' }} !important;" class="object-contain group-hover:hidden">
                <img src="{{ $partner['color_logo'] ?? $partner['logo'] }}" alt="{{ $partner['name'] }}" style="width: {{ $partner['width'] ?? '80%' }} !important; height: {{ $partner['height'] ?? '40%' }} !important;" class="object-contain hidden group-hover:block">
            </div>
        @endforeach
    </div>
</div>
