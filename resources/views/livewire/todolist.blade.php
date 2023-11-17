<div class="bg-blue-200 w-full p-8 flex justify-start font-sans">
    @foreach($cards as $card)
        <div class="flex" key="{{ $card->id }}">
            <div class="rounded bg-gray-500 bg-grey-light shadow w-64 p-2 ml-2">
                <div>
                    @if($card->id == $cardState)
                        <div class="flex">
                            <form wire:submit.prevent="saveCard" action="">
                            <input class="rounded pl-1" placeholder="new card" type="text" wire:model="titleCard">

                            <span x-text="$wire.titleCard.length" class="-ml-6 mt-1"></span>
                       {{--     <button wire:click="saveCard" class="ml-4 border-2 border-gray-800 p-1 rounded">add</button>--}}
                            </form>
                        </div>
                        <div class="text-red-500">
                            @error('titleCard')
                            {{$message}}
                            @enderror
                        </div>
                    @else
                        <div class="flex justify-between">
                            <button wire:click="changeCardState({{ $card->id }})" class="text-xl font-bold">add</button>
                            <button class="ml-2 text-red-600" wire:click="deleteCard({{ $card->id }})">delete card
                            </button>
                        </div>
                    @endif
                </div>
                <h3 class="text-xl font-bold">{{ $card->title }}</h3>
                <div class="text-sm mt-2">
                    @foreach($card->items as $item)
                        <x-todo-item :item="$item" :id="$card->id"></x-todo-item>
                    @endforeach
                </div>
                @if($card->id == $todoState)
                    <div class="flex mt-2">
                        <form wire:submit.prevent="saveTodo({{ $card->id }})" action="">
                            <input  wire:model="title" class="rounded pl-1"
                                   placeholder="new todo" type="text" wire:model="card_title">
                        </form>
                    </div>
                    <div class="text-red-500">
                        @error('title')
                        {{$message}}
                        @enderror
                    </div>
                @else
                    <p wire:click="changeTodoState({{ $card->id }})" class="mt-3 text-grey-dark">Add todo...</p>
                @endif
            </div>
        </div>
    @endforeach
</div>