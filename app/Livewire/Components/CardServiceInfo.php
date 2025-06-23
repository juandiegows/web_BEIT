<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CardServiceInfo extends Component
{
    public $name;
    public $url;
    public $description;
    public $features;
    public $url_logo;
    public $type; // Para determinar el estilo de la sección (start o end)
    public $url_image_blanco;
    public $url_image_normal;

    public function mount($name, $url, $description, $features, $url_logo = null, $type = 'end', $url_image_blanco = null, $url_image_normal = null)
    {
        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
        $this->features = $features;
        $this->url_logo = $url_logo;
        $this->type = $type; // 'end' para secciones que terminan a la derecha, 'start' para las que empiezan a la izquierda
        $this->url_image_blanco = $url_image_blanco;
        $this->url_image_normal = $url_image_normal;
    }

    public function render()
    {
        return view('livewire.components.card-service-info');
    }
}
