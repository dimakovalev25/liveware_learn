<div>
    <div class=" bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
        <div class="ml-[70%] ">


            <button wire:click.prevent="updateTimestamp({{ $item->id }}, {{ $id }})"
                    class="ml-2 text-yellow-600 font-bold mr-1">^
            </button>


            <button wire:click.prevent="approveTodo({{ $item->id }}, {{ $id }})" class="text-green-600 font-bold ">V
            </button>
            <button wire:click.prevent="deleteTodo({{ $item->id }}, {{ $id }})"
                    class="ml-2 text-red-600 font-bold">X
            </button>
        </div>


        <a href="/todo/{{$item->id}}"
           class="@if($item->completed) line-through text-gray-500 @endif">  {{ $item->todo }} </a>
        <span>/ {{Carbon\Carbon::parse($item->updated_at)->format('Y-m-d H:i:s')}}</span>

    </div>


</div>