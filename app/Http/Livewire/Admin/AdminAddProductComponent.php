<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
Use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Product;
use Carbon\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $SKU;
    public $stock_status;
    public $quantity;
    public $image;

    public function mount()
    {
        $this->stock_status = 'instock';
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function addProduct()

    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->save();
        session()->flash('message','Product has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-product-component')->layout('layouts.base');
    }
}
