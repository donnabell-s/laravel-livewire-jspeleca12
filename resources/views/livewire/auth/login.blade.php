<form wire:submit.prevent="login">
    <input type="email" wire:model="email" placeholder="Email">
    <input type="password" wire:model="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
