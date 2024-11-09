<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class AdminProfile extends Component
{
    public $user;
    public function mount(){
        $this->user = User::where('userID',Session::get('userID'))->first();
    }

    public function render()
    {
        return view('livewire.admin.admin-profile');
    }
}