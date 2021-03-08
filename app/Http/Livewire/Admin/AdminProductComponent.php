<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id){
        $product= Product::find($id);
        $image_path =   public_path('assets/images/products/' . $product->image);
        //dd($image_path);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $product->delete();
        session()->flash('message','Product has been deleted successfully');
    }

    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component', ['products'=>$products])->layout('layouts.master');
    }
}
