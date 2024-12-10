<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Access;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EntranceControll extends Component
{
    public $allAccess = [];

    public $option = 0; // option = 1 queryAll / option = 2 queryToday
    
    public function queryAll() : void{
        $this->allAccess = Access::all();
        $this->render();
    }

    public function queryFromToday() : void{
        $this->allAccess = DB::table('access_controll')->where('dia',Carbon::now()->format('Y-m-d'))->paginate(10);
        $this->render();
    }

    public function queryInterval(Request $request) : void{
        $this->allAccess = DB::table('access_controll')->whereBetween('dia',[$request['selectintervalstart'],$request['selectintervalend']])->get();
        $this->render();
    }




    public function render(){
        $this->queryFromToday();
        return view('livewire.entrance-controll',[
            'allAccess' => $this->allAccess,
        ]);
    }

    public function render2(){
        $this->queryAll();
        return view('livewire.entrance-controll',[
            'allAccess' => $this->allAccess,
        ]);
    }


}
