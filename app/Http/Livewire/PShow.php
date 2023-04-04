<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PShow extends Component
{
    public $item;
    public $p;
    public function render()
    {
        return view('livewire.p-show');
    }
}
