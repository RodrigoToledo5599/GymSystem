<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AccountsList extends Component
{   
    public $users = [];

    public function queryusers() : void {
        $this->users= DB::table('users')->paginate(10);
    }

    public function render()
    {
        $this->queryusers();
        return view('livewire.accounts-list',[
            'users' => $this->users,
        ]);
    }
}
