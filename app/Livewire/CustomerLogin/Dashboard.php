<?php

namespace App\Livewire\CustomerLogin;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Dashboard extends Component
{
    public $key;
    public $data;

    public function passData()
    {
        Session::put('productID',$this->key);

        return redirect()->route('dashboard.view');
    }

    public function render()
    {
        // Get all products for display
        $products = Product::all();

        return view('livewire.customer-login.dashboard', compact('products'));
    }
}