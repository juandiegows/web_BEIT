<div class="w-[90%] lg:w-[80%] max-w-7xl mx-auto grid-flow-dense grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
    @foreach($images as $image)
        <div class="@if($image['size'] === 'horizontal') sm:col-span-2 md:col-span-2 xl:col-span-2por 
                     @elseif($image['size'] === 'vertical') row-span-2 
                     @endif cursor-pointer">
            <img  src="{{ $image['url'] }}" 
                alt="Gallery Image" 
                class="w-full h-full object-cover rounded-2xl shadow-lg transition-transform duration-300 transform hover:scale-105"
            >
        </div>
    @endforeach
</div>
