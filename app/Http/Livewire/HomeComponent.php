<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
        // return view('livewire.home-component')
        // ->layout('layouts.base')
        // ->slot('body');
    }
}
