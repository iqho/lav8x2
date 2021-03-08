<?php
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;



Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->prefix('admin')->group(function () {
    Route::get('dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('products',AdminProductComponent::class)->name('admin.products');
    Route::get('product/add',AdminAddProductComponent::class)->name('admin.addproduct');

});
