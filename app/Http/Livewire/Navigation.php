<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{

    public $props = ['Home', 'About', 'Contact', 'Form'];

    public function render()
    {
        return view('livewire.navigation');
    }
}
