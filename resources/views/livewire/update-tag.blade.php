<div>
    <div class="flex items-center mb-3">
        <div
            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-green-500 text-white flex-shrink-0">
            +
        </div>
        <h2 class="text-gray-900 text-lg title-font font-medium mr-4">Updating Tag</h2>

    </div>

    <input type="hidden" wire:model="tagid">
    <input type="text" wire:model.debounce='name' class="w-6/12 rounded-md p-2 mb-2">

    @error('name')    <div class="w-6/12 rounded-md text-red-600 text-semibold">
        {{ $message }}   </div>@enderror
 
<div>

    <button class="bg-green-400 py-1 px-3 rounded-sm text-white"
    wire:click.debounce="updatetag()">
     Update
 </button>    <button class="bg-yellow-400 py-1 px-3 mb-2 rounded-sm"
 wire:click="return()"
 >
Cancel
</button>


</div>
 
</div>
