<?php

namespace App\Livewire\CustomerLogin;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ViewProduct extends Component
{
    public function render()
    {
        $sessionProductID = Session::get('productID');

        $product = Product::where('productID',$sessionProductID)->first();

        return view('livewire.customer-login.view-product',compact('product'));
    }
}