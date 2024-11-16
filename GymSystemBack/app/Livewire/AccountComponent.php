<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class AccountComponent extends Component
{
    public $user;
    
    public function mount($_user){
        $this->user = $_user;
    }   

    public function render()
    {   
        return view('livewire.account-component',[
            'user'=> $this->user
        ]);
    }
}
