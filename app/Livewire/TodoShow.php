<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class TodoShow extends Component
{

    public $item;

    public function mount($id)
    {
//        dd($id);
        $this->item = Item::findOrFail($id);
    }


    public function render()
    {
        return view('livewire.todo-show', [
            'item' => $this->item
        ]);
    }
}
