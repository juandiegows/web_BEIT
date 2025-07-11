<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public function navigate($route)
    {
        $this->redirect(route($route));
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
