<div>
    <h1>Edit Product</h1>

    <form wire:submit.prevent="update">
        <input type="text" wire:model="name" placeholder="Name"><br>
        <textarea wire:model="description" placeholder="Description"></textarea><br>
        <input type="number" step="0.01" wire:model="price" placeholder="Price"><br>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('products.index') }}">Back</a>
</div>
