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

    public function mount($name, $url, $description, $features, $url_logo = null, $type = 'end')
    {
        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
        $this->features = $features;
        $this->url_logo = $url_logo;
        $this->type = $type; // 'end' para secciones que terminan a la derecha, 'start' para las que empiezan a la izquierda
    }

    public function render()
    {
        return view('livewire.components.card-service-info');
    }
}
