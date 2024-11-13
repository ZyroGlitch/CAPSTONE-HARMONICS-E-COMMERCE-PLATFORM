<?php

use App\Livewire\Index;
use App\Livewire\Customer\About;
use App\Livewire\Customer\Contact;
use App\Livewire\Customer\Product;
use App\Livewire\Admin\AdminOrders;
use App\Livewire\Admin\AdminProduct;
use App\Livewire\Admin\AdminProfile;
use App\Livewire\CustomerLogin\Cart;
use App\Livewire\Admin\AdminMessages;
use App\Livewire\Customer\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\AdminCustomers;
use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Customer\Auth\SignUp;
use App\Livewire\CustomerLogin\Orders;
use App\Livewire\CustomerLogin\Profile;
use App\Livewire\Admin\AdminSalesReport;
use App\Livewire\CustomerLogin\Location;
use App\Livewire\CustomerLogin\Messages;
use App\Livewire\CustomerLogin\Dashboard;
use App\Livewire\CustomerLogin\ViewProduct;
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


Route::middleware('customer')->group(function () {
    // Routes For Authenticated Customer
    Route::get('/dashboard', Dashboard::class)
    ->name('customer-login.dashboard');

    Route::get('/dashboard/view', ViewProduct::class)
    ->name('dashboard.view');

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
});


Route::middleware('admin')->group(function () {
    // Routes For Admin
    Route::get('/admin-dashboard', AdminDashboard::class)
    ->name('admin.admin-dashboard');

    Route::get('/admin-orders', AdminOrders::class)
    ->name('admin.admin-orders');
    
    Route::get('/admin-product', AdminProduct::class)
    ->name('admin.admin-product');

    Route::get('/admin-salesReport', AdminSalesReport::class)
    ->name('admin.admin-salesReport');

    Route::get('/admin-customers', AdminCustomers::class)
    ->name('admin.admin-customers');

    Route::get('/admin-messages', AdminMessages::class)
    ->name('admin.admin-messages');

    Route::get('/admin-profile', AdminProfile::class)
    ->name('admin.admin-profile');

});