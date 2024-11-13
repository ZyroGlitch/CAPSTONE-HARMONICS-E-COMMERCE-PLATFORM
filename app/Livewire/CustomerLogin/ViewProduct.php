<?php

namespace App\Livewire\CustomerLogin;

use Livewire\Component;

class ViewProduct extends Component
{
    public $productData;

    protected $listeners = ['productSelected' => 'setProductData'];

    public function setProductData($data)
    {
        $this->productData = $data;
    }
    
    public function render()
    {
        return view('livewire.customer-login.view-product');
    }
}