<div>

    <div class="flex justify-between bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">

        <a href="/todo/{{$item->id}}"
           class="@if($item->completed) line-through text-gray-500 @endif">  {{ $item->todo }} </a>
        <div>
            <button wire:click.prevent="approveTodo({{ $item->id }}, {{ $id }})" class="text-green-600">V</button>
            <button wire:click.prevent="deleteTodo({{ $item->id }}, {{ $id }})"
                    class="ml-2 text-red-600">X
            </button>
        </div>
    </div>


</div>