<div>



    <input type="text" wire:model.debounce='name' class="w-6/12 rounded-md p-2 mb-2">

    @error('name')    <div class="w-6/12 rounded-md text-red-600 text-semibold">
        {{ $message }}   </div>@enderror
 
<div>

    <button class="bg-green-400 py-1 px-3">
     Update
 </button>    <button class="bg-yellow-400 py-1 mb-2"
 wire:click="return()"
 >
Cancel
</button>


</div>
 
</div>
