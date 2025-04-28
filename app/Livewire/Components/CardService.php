<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CardService extends Component
{
    public $name;
    public $url;
    public $description;

    public function mount($name, $url,$description)
    {
        $this->name = $name;
        $this->url =  $url;
        $this->description =  $description;
    }


    public function render()
    {
        return view('livewire.components.card-service');
    }
}
