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
        $this->allAccess = DB::table('access_controll')->paginate(10);
    }

    public function queryFromASpecificDay(Request $request) : void{
        $this->allAccess = DB::table('access_controll')->where('dia',$request['selectday'])->paginate(10);
    }

    public function queryInterval(Request $request) : void{
        $this->allAccess = DB::table('access_controll')->whereBetween('dia',[$request['selectintervalstart'],$request['selectintervalend']])->paginate(10);
    }




    public function render(){
        $this->queryAll();
        return view('livewire.entrance-controll',[
            'allAccess' => $this->allAccess,
        ]);
    }

    public function renderDay(Request $request){
        $this->queryFromASpecificDay($request);
        return view('livewire.entrance-controll',[
            'allAccess' => $this->allAccess,
        ]);
    }

    public function renderInterval(Request $request){
        $this->queryAll($request);
        return view('livewire.entrance-controll',[
            'allAccess' => $this->allAccess,
        ]);
    }


}
