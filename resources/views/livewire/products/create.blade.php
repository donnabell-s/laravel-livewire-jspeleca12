
<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">Add New Product</div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="save" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                            <input type="text" wire:model="code" class="form-control @error('code') is-invalid @enderror" id="code">
                            @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start">Quantity</label>
                        <div class="col-md-6">
                            <input type="number" wire:model="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity">
                            @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">Price</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" wire:model="price" class="form-control @error('price') is-invalid @enderror" id="price">
                            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="imgurl" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                        <div class="col-md-6">
                            <input type="file" wire:model="imgurl" class="form-control @error('imgurl') is-invalid @enderror" id="imgurl">
                            @error('imgurl') <span class="text-danger">{{ $message }}</span> @enderror
                            @if ($imgurl)
                                <img src="{{ $imgurl->temporaryUrl() }}" class="img-fluid mt-2 rounded" width="150">
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
