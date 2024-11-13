<?php

namespace App\Livewire\CustomerLogin;

use App\Models\Product;
use Livewire\Component;

class Dashboard extends Component
{
    public $key;
    public function passData(){
        $data = Product::where('productID',$this->key)->first();

        // Optionally use a method to refresh another component
        $this->emit('productSelected', $this->data);

        return redirect()->route('dashboard.view',);
    }
    
    public function render()
    {
        $products = Product::all();
        
        return view('livewire.customer-login.dashboard',compact('products'));
    }
}