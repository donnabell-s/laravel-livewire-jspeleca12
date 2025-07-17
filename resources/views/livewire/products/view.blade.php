<div>
    <h1>View Product</h1>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>

    <a href="{{ route('products.index') }}">Back</a>
</div>
