<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use App\Models\Product as Products;
use Livewire\Component;

#[Title('Product List')]
class Product extends Component
{   
    public function render()
    {
        $products = Products::all();
        return view('livewire.product', compact('products'));
    }
}
