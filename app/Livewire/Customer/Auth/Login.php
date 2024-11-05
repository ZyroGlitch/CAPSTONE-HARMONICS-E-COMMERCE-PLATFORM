<?php

namespace App\Livewire\Customer\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $email;
    public $password;

    public function login(){
        $user = User::where('email',$this->email)->first();

        if($user && Hash::check($this->password, $user->password)){
            Session::put('userID',$user->userID);

            $this->redirectRoute('customer-login.dashboard');
        }else{
            session()->flash('error','Incorrect Username or Password!');

            $this->redirectRoute('customer.login');
        }
    }

    public function render()
    {
        return view('livewire.customer.auth.login');
    }
}