
<div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <div class="float-start">Product Details</div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                @if ($imgurl)
                    <div class="text-center mb-3">
                        <img src="{{ asset('storage/' . $imgurl) }}" class="img-fluid rounded" width="200">
                    </div>
                @endif

                <p><strong>Code:</strong> {{ $code }}</p>
                <p><strong>Name:</strong> {{ $name }}</p>
                <p><strong>Quantity:</strong> {{ $quantity }}</p>
                <p><strong>Price:</strong> ₱{{ number_format($price, 2) }}</p>
                <p><strong>Description:</strong> {{ $description }}</p>
            </div>
        </div>
    </div>
</div>
