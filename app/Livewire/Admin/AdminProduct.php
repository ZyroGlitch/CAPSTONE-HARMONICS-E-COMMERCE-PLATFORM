<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminProduct extends Component
{
     use WithFileUploads;
     
    public $name;
    public $description;
    public $price;
    public $stock;
    public $category;
    public $image;

    public function store(){
        if($this->image) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $this->image->extension();

            // Store the image in the 'public/uploads' directory
            $this->image->storeAs('uploads/products/', $imageName, 'public');

            // Set $imagePath to the relative path to the image for storing in the database
            $imagePath = $imageName;
        }
    
        $store = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'category' => $this->category,
            'price' => $this->price,
            'stock' => $this->stock,
            'image' => $imagePath
        ]);

        // Reset all input fields
        $this->reset(['name', 'description', 'category', 'price', 'stock', 'image']);
        
        if($store){
            return redirect()->route('admin.admin-product')->with('success','New product added successfully.');

        }else{
             return redirect()->route('admin.admin-product')->with('error',"Can't store this new product!");
        }
    }
    
    public function render()
    {
        return view('livewire.admin.admin-product');
    }
}