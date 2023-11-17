<div>
    <div class="flex ">

        <button wire:click.prevent="add" class="inline-block rounded-full border border-indigo-600 bg-indigo-600  text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"> add </button>

        <div class="text-2xl ml-4 mr-4">
            Counter:  {{ $counter}}
        </div>

        <button wire:click.prevent="remove" class="inline-block rounded-full border border-indigo-600 bg-indigo-600  text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">remove</button>
    </div>

</div>
