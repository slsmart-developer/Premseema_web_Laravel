<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ProductComponent extends Component
{

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

	use WithPagination;
    public function render()
    {
    	$products = Product::paginate(7);
        return view('livewire.product-component',['products'=> $products])->layout("layouts.base");
    }
}
