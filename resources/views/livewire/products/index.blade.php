<div>
    <h1>Product List</h1>

    <a href="{{ route('products.create') }}">Create Product</a>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->name }} - ${{ $product->price }}
                <a href="{{ route('products.view', $product->id) }}">View</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>

                <button
                    wire:click="delete({{ $product->id }})"
                    onclick="return confirm('Delete this product?')"
                    class="text-red-500"
                >
                    Delete
                </button>
            </li>
        @endforeach
    </ul>
</div>
