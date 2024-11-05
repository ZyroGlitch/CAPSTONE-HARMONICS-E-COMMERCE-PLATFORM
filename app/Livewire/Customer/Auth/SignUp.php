<?php

namespace App\Livewire\Customer\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignUp extends Component
{
    public $firstname;
    public $lastname;
    public $contact_number;
    public $address;
    public $email;
    public $password;
    

    public function store(){
        $exist = User::where('email',$this->email)->first();

        if(!$exist){
            // Store Data In The User Table
            $data = User::create([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'contact_number' => $this->contact_number,
                'address' => $this->address,
                'profile_image' => 'assets/logo.png',
                'email' => $this->email,
                'password' => Hash::make($this->password)
            ]);

            // Fetch The Primary Key UserID
            $userID = User::where('email',$this->email)->first();

            Session::put('userID',$userID->userID);

            if($data){
                $this->redirectRoute('customer-login.dashboard');
            }else{
                session()->flash('error',"Can't store your information!");

                 $this->redirectRoute('customer.signUp');
            }

        }else{
            session()->flash('error','This email already exist!');
            
            $this->redirectRoute('customer.signUp');
        }
        
    }

    public function render()
    {
        return view('livewire.customer.auth.sign-up');
    }
}