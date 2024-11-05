<?php

use App\Livewire\Index;
use App\Livewire\Customer\About;
use App\Livewire\Customer\Contact;
use App\Livewire\Customer\Product;
use App\Livewire\CustomerLogin\Cart;
use App\Livewire\Customer\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Customer\Auth\SignUp;
use App\Livewire\CustomerLogin\Orders;
use App\Livewire\CustomerLogin\Profile;
use App\Livewire\CustomerLogin\Location;
use App\Livewire\CustomerLogin\Messages;
use App\Livewire\CustomerLogin\Dashboard;
use App\Http\Controllers\CustomerController;
use App\Livewire\CustomerLogin\Notification;

// Routes For Landing Page
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

Route::get('/logout', [CustomerController::class,'logout'])
->name('customer.logout');

// Routes For Authenticated Customer
Route::get('/dashboard', Dashboard::class)
->name('customer-login.dashboard');

Route::get('/orders', Orders::class)
->name('customer-login.orders');

Route::get('/messages', Messages::class)
->name('customer-login.messages');

Route::get('/location', Location::class)
->name('customer-login.location');

Route::get('/cart', Cart::class)
->name('customer-login.cart');

Route::get('/notification', Notification::class)
->name('customer-login.notification');

Route::get('/profile', Profile::class)
->name('customer-login.profile');