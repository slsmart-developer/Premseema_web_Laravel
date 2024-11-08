<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HealthTipsComponent extends Component
{
    public function render()
    {
        return view('livewire.health-tips-component')->layout('layouts.base');
    }
}
