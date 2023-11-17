<?php

namespace App\Livewire;

use App\Models\Card;
use App\Models\Item;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Todolist extends Component
{

    #[Rule('required')]
    public $title = '';

//    #[Rule('required|min:2')]

    public $titleCard = '';
    public $cardState = false;
    public $todoState = false;

    public $cards;

    public function mount()
    {
        $this->cards = Card::with('items')->get();

    }

    public function render()
    {
        $this->cards = Card::all();


        return view('livewire.todolist', [
            'cards' => $this->cards
        ]);
    }

    public function changeCardState($id)
    {
        $this->cardState = $id;

    }

    public function changeTodoState($id)
    {
        $this->todoState = $id;
    }

    public function saveCard()
    {
        $this->validate();

        Card::create([
            'title' => $this->titleCard,
            'position' => 5
        ]);

        $this->cards = Card::all();
        $this->titleCard = '';
    }

    public function deleteCard($card_id)
    {
        $card = Card::find($card_id);

        if (!$card) {
            return 'Card not found!';
        }

        $todos = Item::where('card_id', $card_id)->get();

        foreach ($todos as $todo) {
            $todo->delete();
        }

        $card->delete();

        return 'Card deleted successfully!';
    }

    public function deleteTodo($id, $card_id)
    {
        $todo = Item::where('id', $id)
            ->where('card_id', $card_id)
            ->first();
        if ($todo) {
            $todo->delete();
        } else {
            return 'todo not found!';
        }

    }

    public function approveTodo($id, $card_id)
    {
        $todo = Item::where('id', $id)
            ->where('card_id', $card_id)
            ->first();
        if ($todo) {
            $todo->completed = 1;
            $todo->save();
        } else {
            return 'todo not found!';
        }

    }

    public function saveTodo($id)
    {
        $this->validate();
        Item::create([
            'todo' => $this->title,
            'position' => 1,
            'card_id' => $id
        ]);
        $this->title = '';
    }


    public function saveTodoo($id)
    {
        try {
            $this->validate([
                'title' => 'required|min:2',
            ]);

            Item::create([
                'todo' => $this->title,
                'position' => 1,
                'card_id' => $id
            ]);

            $this->title = '';
        } catch (ValidationException $e) {
            $this->addError('title', $e->validator->errors()->first('title'));
        }
    }
}
