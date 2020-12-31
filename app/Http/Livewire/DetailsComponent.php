<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $products = Product::where('slug',$this->slug)->first();
        return view('livewire.details-component',['products'=>$products])->layout('layouts.master');
    }
}
