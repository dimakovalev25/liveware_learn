<div>
    @if(session()->has('message'))
        <div class="p-4 mb-4 text-sm w-2/6 mx-auto text-green-700 rounded-lg bg-green-50 ">
            {{ session('message') }}
        </div>

    @endif
</div>