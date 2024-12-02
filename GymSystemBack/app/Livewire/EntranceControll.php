<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Access;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EntranceControll extends Component
{
    public $allAccess = [];

    public $option = 0; // option = 1 queryAll / option = 2 queryToday
    
    public function queryAllAccess() : void{
        $this->allAccess = Access::all();
    }

    public function queryAccessFromToday() : void{
        $this->allAccess = DB::table('access_controll')->where('dia',Carbon::now()->format('Y-m-d'))->paginate(10);
    }

    public function render()
    {
        $this->queryAccessFromToday();
        return view('livewire.entrance-controll',[
            'allAccess' => $this->allAccess,
        ]);
    }

    public function render2(){
        $this->queryAllAccess();
        return view('livewire.entrance-controll',[
            'allAccess' => $this->allAccess,
        ]);
    }

}
