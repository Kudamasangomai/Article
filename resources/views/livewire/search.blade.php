<div class="z-50">
    <input type="text" class="rounded-md mt-4" id="search" wire:model.debounce="searched_article"
        placeholder="Search Article">


    @if ($searched_article)


    <div class="bg-white z-50 w-full mt-2 p-4 rounded-md ">
        <ul class="">
            @foreach ($articles as $item)
            <li class="border-b-2 border-gray-200 py-4 hover:bg-gray-200">
                <button class="btn" id="btn">
                    
                        <a href="{{ route('article_object', $item) }}">
                    {{ $item->title }}
                    </a>
                </button>
            </li>
            @endforeach
        </ul>



    </div>
    @endif








</div>