<?php
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;



Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->prefix('admin')->group(function () {
    Route::get('dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('products',AdminProductComponent::class)->name('admin.products');
    Route::get('product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');

    Route::get('slider',AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('slider/edit/{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');



});
