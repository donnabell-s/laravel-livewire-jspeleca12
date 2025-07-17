<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Validator;

class Create extends Component
{
    use WithFileUploads;

    public $code, $name, $quantity, $price, $description, $imgurl;

    public function save()
    {
        $validated = Validator::make(
            $this->all(),
            (new StoreProductRequest())->rules()
        )->validate();

        // $validated['imgurl'] = $this->imgurl?->store('images', 'public');
        $path = $this->imgurl->store('products', 'public');
        $validated['imgurl'] = 'products/' . basename($path);


        Product::create($validated);

        session()->flash('message', 'Product created!');
        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
