<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
        Product::findOrFail($id)->delete();

        session()->flash('message', 'Product deleted successfully.');
    }
    public function render()
    {
        return view('livewire.products.index', [
            'products' => Product::latest()->paginate(5)
        ]);
    }

}
