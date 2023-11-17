<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    public function render()
    {
        return view('livewire.counter');
    }

    public function remove()
    {
        $this->counter -=1;
    }

    public function add()
    {
        $this->counter +=1;
    }

}
