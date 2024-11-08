<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public function render()
    {
        return view('livewire.checkout-component')->layout("layouts.base");
    }
}
