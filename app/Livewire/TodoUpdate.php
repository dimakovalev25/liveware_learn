<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Attributes\On;
use Livewire\Component;

class TodoUpdate extends Component
{

/*    public function updateTimestamp()
    {
        Item::query()->update([
           'updated_at' => now()
        ]);
    }*/


    public function render()
    {
        return view('livewire.todo-update');
    }
}
