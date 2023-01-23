<div>



    <div class="flex items-center mb-3">
        <div
            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0">
            +
        </div>
        <h2 class="text-gray-900 text-lg title-font font-medium mr-4">Add Tag</h2>

    </div>

    <input type="text" wire:model.debounce='name' class="w-6/12 rounded-md p-2 mb-2">
    @error('name')<div class="w-6/12 rounded-md text-red-600 text-semibold">{{ $message }} </div>@enderror

    <div>

        <button class="bg-green-500 py-1 px-3 rounded-md mb-2" wire:click="store_tag()">
            Save
        </button> <button class="bg-yellow-500 py-1 px-3 rounded-md mb-2" wire:click="return()">
            Cancel
        </button>


    </div>


</div>