<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
   public function logout(){
        Session::flush(); // Remove all session
        return redirect()->route('customer.login');
    }
}