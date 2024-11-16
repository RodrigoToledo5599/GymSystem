<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $value = 'fffffff';

    public function render()
    {
        return view('livewire.counter');
    }
}
