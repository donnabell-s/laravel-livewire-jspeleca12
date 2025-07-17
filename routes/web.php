<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Products\Index as ProductIndex;
use App\Livewire\Products\Create;
use App\Livewire\Products\View as ProductView;
use App\Livewire\Products\Edit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/products', ProductIndex::class)->name('products.index');
    Route::get('/products/create', Create::class)->name('products.create');
    Route::get('/products/{product}', ProductView::class)->name('products.view');
    Route::get('/products/{product}/edit', Edit::class)->name('products.edit');
});

Route::get('/', function () {
    return redirect('products'); 
});

Route::fallback(function () {
    return redirect()->route('products.index');
});
