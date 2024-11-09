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

            switch($user->role){
                case 'Customer':
                    $this->redirectRoute('customer-login.dashboard');
                    break;

                case 'Admin':
                    $this->redirectRoute('admin.admin-dashboard');
                    break;
            }

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