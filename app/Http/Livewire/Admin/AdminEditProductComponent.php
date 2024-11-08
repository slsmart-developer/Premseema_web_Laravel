<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
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
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
      $product = Product::where('slug',$product_slug)->first();
      $this-> $name = $product->name;
      $this-> $slug = $product->slug;
      $this-> $short_description = $product->short_description;
      $this-> $description = $product->description;
      $this-> $regular_price = $product->regular_price;
      $this-> $SKU = $product->SKU;
      $this-> $stock_status = $product->stock_status;
      $this-> $quantity = $product->quantity;
//       @if($this->newimage)
//       {
//
//       }
//       @endif
      $this-> $image = $product->image;
      $this-> $newimage = $product->newimage;
      $this-> $product_id = $product->product_id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
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
        return view('livewire.admin.admin-edit-product-component')->layout('layouts.base');
    }
}
