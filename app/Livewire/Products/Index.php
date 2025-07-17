<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function delete($id)
    {
        Product::findOrFail($id)->delete();

        // Optionally flash a success message
        session()->flash('message', 'Product deleted successfully.');
    }

    public function render()
    {
        $products = Product::latest()->get();

        return view('livewire.products.index', [
            'products' => $products
        ]);
    }
}
