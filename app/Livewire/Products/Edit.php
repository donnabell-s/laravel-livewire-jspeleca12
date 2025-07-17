<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $product;
    public $code, $name, $quantity, $price, $description, $imgurl;
    public $newImage;

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);

        $this->code = $this->product->code;
        $this->name = $this->product->name;
        $this->quantity = $this->product->quantity;
        $this->price = $this->product->price;
        $this->description = $this->product->description;
        $this->imgurl = $this->product->imgurl;
    }

    public function update()
    {
        $validated = $this->validate([
            'code' => 'required|string|max:50|unique:products,code,' . $this->product->id,
            'name' => 'required|string|max:250',
            'quantity' => 'required|integer|min:1|max:10000',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'newImage' => 'nullable|image',
        ]);

        // dd($this->newImage);


        if ($this->newImage) {
            if ($this->product->imgurl && Storage::disk('public')->exists($this->product->imgurl)) {
                Storage::disk('public')->delete($this->product->imgurl);
            }

            $path = $this->newImage->store('products', 'public');
            $validated['imgurl'] = 'products/' . basename($path);
        } else {
            $validated['imgurl'] = $this->imgurl;
        }

        $this->product->update($validated);

        session()->flash('message', 'Product updated successfully.');
        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
