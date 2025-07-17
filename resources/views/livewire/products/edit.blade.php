
<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <div class="float-start">Edit Product</div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                            <input wire:model="code" type="text" class="form-control @error('code') is-invalid @enderror">
                            @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end text-start">Quantity</label>
                        <div class="col-md-6">
                            <input wire:model="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror">
                            @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end text-start">Price</label>
                        <div class="col-md-6">
                            <input wire:model="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror">
                            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end text-start">Image</label>
                        <div class="col-md-6">
                            <input wire:model="newImage" type="file" class="form-control @error('newImage') is-invalid @enderror">
                            @error('newImage') <span class="text-danger">{{ $message }}</span> @enderror
                            @if ($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}" class="img-fluid mt-2 rounded" width="120">
                            @elseif ($imgurl)
                                <img src="{{ asset('storage/' . $imgurl) }}" class="img-fluid mt-2 rounded" width="120">
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
