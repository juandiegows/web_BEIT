<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Gallery extends Component
{
    public $images = [];

    public function mount($images)
    {
        $this->images = collect($images)->map(function($image) {
            $path = storage_path('app/public/' . $image); // O usa el path correcto si no es public
            [$width, $height] = getimagesize($path);

            $ratio = $width / $height;

            if ($ratio > 1.3) {
                $size = 'horizontal'; // muy horizontal
            } elseif ($ratio < 0.7) {
                $size = 'vertical'; // muy vertical
            } else {
                $size = 'square'; // casi cuadrado
            }

            return [
                'url' => Storage::url($image),
                'size' => $size,
            ];
        });
    }

    
    public function render()
    {
        return view('livewire.components.gallery');
    }
}
