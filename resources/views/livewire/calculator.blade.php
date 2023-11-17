<div class="bg-gray-300 rounded shadow p-4">
    <div class="flex mb-2 ml-4">
        calculator
    </div>

    <div class="flex">

        <div>
            <div class="flex items-center gap-1">
                <input wire:model="number1"
                       type="number"
                       id="Quantity"

                       class="h-10 pl-2 w-24  ml-4 rounded border-gray-200 sm:text-sm"
                />
            </div>
        </div>

        <div>
            <select wire:model="action" class="pr-2 ml-4 h-10 w-24 rounded border-gray-200 sm:text-sm">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>

            </select>
        </div>

        <div>
            <div class="flex items-center ml-4 gap-1">

                <input
                        type="number"
                        id="Quantity"
                        wire:model="number2"
                        class="pl-2 h-10 w-24 rounded border-gray-200 sm:text-sm"
                />

            </div>
        </div>

        <div class="flex">
            <button wire:click="calculate"
                    class="flex items-center rounded border-gray-200 pl-4 ml-4 h-10 w-24 gap-1 bg-green-300">

                Calculate

            </button>
            <button wire:click="reset2"
                    class="flex items-center rounded border-gray-200 pl-4 ml-4 h-10 w-24 gap-1 bg-red-600">

                Reset!

            </button>
        </div>


    </div>


    <div class="mt-2 ml-4">
        Result: {{ $result }}
    </div>
</div>
<script>
    Livewire.on('refreshPage', function () {
        location.reload();
    });
</script>