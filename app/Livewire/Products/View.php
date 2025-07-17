<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class View extends Component
{
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.products.view');
    }
}
