<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Partners extends Component
{
    public $partners = [
        ['name' => 'Partner 1', 'logo' => '/img/partners/microsoft.png', 'width' => '73%', 'height' => '73%', 'color_logo' => '/img/partners/microsoftColor.png'],
        ['name' => 'Partner 2', 'logo' => '/img/partners/lenovo.png', 'width' => '60%', 'height' => '60%', 'color_logo' => '/img/partners/lenovoColor.png'],
        ['name' => 'Partner 3', 'logo' => '/img/partners/amazon.png', 'width' => '50%', 'height' => '50%', 'color_logo' => '/img/partners/amazonColor.png'],
        ['name' => 'Partner 4', 'logo' => '/img/partners/veeam.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/veeamColor.png'],
    ];

    public function render()
    {
        return view('livewire.components.partners');
    }
}
