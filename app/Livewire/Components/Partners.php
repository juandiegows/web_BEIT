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
        ['name' => 'Partner 5', 'logo' => '/img/partners/logitech.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/logitechColor.png'],
        ['name' => 'Partner 6', 'logo' => '/img/partners/ezviz.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/ezvizColor.png'],
        ['name' => 'Partner 7', 'logo' => '/img/partners/alhua.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/alhuaColor.png'],
        ['name' => 'Partner 8', 'logo' => '/img/partners/hikvision.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/hikvisionColor.png'],
        ['name' => 'Partner 9', 'logo' => '/img/partners/google.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/googleColor.png'],
        ['name' => 'Partner 10', 'logo' => '/img/partners/cisco.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/ciscoColor.png'],
        ['name' => 'Partner 11', 'logo' => '/img/partners/openIA.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/openIAColor.png'],
        ['name' => 'Partner 12', 'logo' => '/img/partners/redragon.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/redragonColor.png'],
        ['name' => 'Partner 13', 'logo' => '/img/partners/dji.png', 'width' => '75%', 'height' => '75%', 'color_logo' => '/img/partners/djiColor.png'],
    ];

    public function render()
    {
        return view('livewire.components.partners');
    }
}
