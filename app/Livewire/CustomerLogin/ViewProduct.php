<?php

namespace App\Livewire\CustomerLogin;

use App\Models\CheckoutProduct;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ViewProduct extends Component
{
    public $quantity = 1;

    public function store(){
        $productID = Session::get('productID');
        $product = Product::where('productID',$productID)->first();

        $userID = Session::get('userID');

        $subtotal = $product->price * $this->quantity;

        $store = CheckoutProduct::create([
            'productID' => $productID,
            'userID' => $userID,
            'quantity' => $this->quantity,
            'subtotal' => $subtotal,
        ]);

        $store ? $this->redirectRoute('dashboard.checkout') : 
                $this->redirectRoute('dashboard.view');
    }

    public function render()
    {
        $sessionProductID = Session::get('productID');

        $product = Product::where('productID',$sessionProductID)->first();

        return view('livewire.customer-login.view-product',compact('product'));
    }
}