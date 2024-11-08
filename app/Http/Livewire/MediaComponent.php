<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MediaComponent extends Component
{
    public function render()
    {
        return view('livewire.media-component')->layout("layouts.base");
    }
}
