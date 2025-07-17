<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Create extends Component
{
    public $name, $description, $price;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}

