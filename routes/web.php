<?php

use App\Livewire\Index;
use App\Livewire\Customer\About;
use App\Livewire\Customer\Contact;
use App\Livewire\Customer\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)
->name('customer.landingPage');

Route::get('/product', Product::class)
->name('customer.product');

Route::get('/about', About::class)
->name('customer.about');

Route::get('/contact', Contact::class)
->name('customer.contact');