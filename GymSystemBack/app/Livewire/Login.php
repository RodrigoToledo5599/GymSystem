<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;


class Login extends Component
{
    public $auth; 
    public function __construct(){
        $this->auth = new AuthController();
    }

    public function authUser(Request $request){
        $autenticado = $this->auth->AuthFuncionario($request);
        switch ($autenticado->status()){
            case 201:
                return redirect('users');
            case 403:
                return view('livewire.login',[
                    'message' => 'senha e/ou email errados.'
                ]);
        }
    }

    
    public function render()
    {
        return view('livewire.login',[
            'message' => ''
        ]);
    }
}
