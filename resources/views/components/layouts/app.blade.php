<!DOCTYPE html>
<html>
<head>
    <title>Livewire App</title>
    @livewireStyles
</head>
<body>

    <nav>  
        @auth
            <a href="{{ route('products.index') }}">Products</a>
            @livewire('auth.logout')
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
