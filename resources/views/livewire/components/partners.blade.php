<div class="w-[80%] mx-auto my-12 pb-64">
    <h1 class="text-txt-primary py-2 font-bold text-center pt-[8%] rounded-lg text-3xl font-kanit">
        NUESTROS PARTNERS
    </h1>

    @foreach (array_chunk($partners, 5) as $rowIndex => $row)
        <div class="flex justify-center {{ $rowIndex === 0 ? 'gap-8 mt-8' : 'gap-4 mt-4' }}">
            @foreach ($row as $partner)
                <div class="w-[200px] h-[100px] cursor-pointer rounded-lg flex items-center justify-center group relative">
                    <img
                        src="{{ $partner['logo'] }}"
                        alt="{{ $partner['name'] }}"
                        class="object-contain group-hover:hidden"
                        style="width: {{ $partner['width'] ?? '80%' }}; height: {{ $partner['height'] ?? '40%' }};"
                    >
                    <img
                        src="{{ $partner['color_logo'] ?? $partner['logo'] }}"
                        alt="{{ $partner['name'] }}"
                        class="object-contain hidden group-hover:block"
                        style="width: {{ $partner['width'] ?? '80%' }}; height: {{ $partner['height'] ?? '40%' }};"
                    >
                </div>
            @endforeach
        </div>
    @endforeach

   

</div>
