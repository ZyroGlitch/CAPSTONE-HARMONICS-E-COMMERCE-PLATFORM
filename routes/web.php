<?php

use App\Livewire\Index;
use App\Livewire\Customer\About;
use App\Livewire\Customer\Contact;
use App\Livewire\Customer\Product;
use App\Livewire\Customer\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Customer\Auth\SignUp;

Route::get('/', Index::class)
->name('customer.landingPage');

Route::get('/product', Product::class)
->name('customer.product');

Route::get('/about', About::class)
->name('customer.about');

Route::get('/contact', Contact::class)
->name('customer.contact');

Route::get('/login', Login::class)
->name('customer.login');

Route::get('/signUp', SignUp::class)
->name('customer.signUp');