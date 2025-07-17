<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Edit extends Component
{
    public $product;
    public $name, $description, $price;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
