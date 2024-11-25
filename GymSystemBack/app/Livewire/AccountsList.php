<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Carbon;

class AccountsList extends Component
{   
    public $users = [];

    public function queryUsers(){
        sleep(2);
        $this->users = User::all();
        return $this->users;
    }

    public function JustReturnUsers(){
        return $this->users;
    }

    public function render()
    {
        $this->queryUsers();
        return view('livewire.accounts-list',[
            // 'users' => $this->users
            'date' => Carbon::now()
        ]);
    }
}
