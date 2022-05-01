<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardImage extends Component
{
    public $icon;
    public function render()
    {
        return view('livewire.card-image');
    }
}
