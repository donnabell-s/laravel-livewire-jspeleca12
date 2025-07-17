
<div class="row justify-content-center mt-4">
    <div class="col-md-10">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Product List</h4>
            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">+ Add Product</a>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="table-responsive shadow-sm">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th class="text-center" width="150">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>₱{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->description }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="{{ route('products.view', $product->id) }}" class="btn btn-info btn-sm" title="View">
                                        <i class="bi bi-eye text-white"></i>
                                    </a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                        <i class="bi bi-pencil text-white"></i>
                                    </a>
                                    <button wire:click="delete({{ $product->id }})" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-sm" title="Delete">
                                        <i class="bi bi-trash text-white"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="text-center">No products found.</td></tr>
                    @endforelse
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
</div>

