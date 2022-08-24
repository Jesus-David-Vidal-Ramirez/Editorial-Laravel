<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $multiplicar = 3;
    public $resultado;
    public function incremento(){
        
        $this->resultado += $this->count * $this->multiplicar;
       return  $this->resultado;

    }

    public function render()
    {
        return view('livewire.counter');
    }
}
