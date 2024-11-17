<?php

namespace App\Livewire\CustomerLogin;

use App\Models\CheckoutProduct;
use Livewire\Component;

use Illuminate\Support\Facades\Session;

class Checkout extends Component
{
    public function store(){
        $sessionProductID = Session::get('productID');
        $userID = Session::get('userID');
    }
    
    public function render()
    {
        $userID = Session::get('userID');
        $products = CheckoutProduct::where('userID',$userID)->get();

        return view('livewire.customer-login.checkout',compact('products'));
    }
}