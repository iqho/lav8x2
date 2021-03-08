<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponentt;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;




Route::get('/', HomeComponent::class)->name('home');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/contact', ContactComponentt::class)->name('contact');
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/search', SearchComponent::class)->name('product.search');


// User Group
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

