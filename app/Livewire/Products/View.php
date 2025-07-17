<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class View extends Component
{
    public $code, $name, $quantity, $price, $description, $imgurl;

    public function mount($id)
    {
        $product = Product::findOrFail($id);

        $this->code = $product->code;
        $this->name = $product->name;
        $this->quantity = $product->quantity;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->imgurl = $product->imgurl;
    }

    public function render()
    {
        return view('livewire.products.view');
    }
}
