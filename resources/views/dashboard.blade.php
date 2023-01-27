<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap  border-b columns-3  overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b mr-1 border-red-700 lg:w-1/5">
                    User info
                </div>
                <div class="p-6 bg-white border-b mr-1   border-red-700 lg:w-1/2">

                    @if(session('success'))
                    <div class="bg-green-500 rounded-sm p-2 w-full text-white" x-data="{show:true}"
                        x-init="setTimeout(()=> show=false,3000)" x-show="show">
                        {{session('success')}}
                    </div>
                    @endif
                    @foreach($articles as $article)


                    <div class="bg-gray-100 md:flex md:flex-row mb-2 border-b mr-1">

                        <div class="p-2">
                            @if ($article->image)
                            <img src="/storage/uploads/{{$article->image}}" class="max-w-full h-auto  mt-1" alt="..." />

                            @else

                            @endif
                            <p class="font-semibold text-sm mb-2 text-gray-800">{{ $article->user->name }}</p>
                            <p class=" text-2xl font-bold mt-2 ">
                                <a href="{{ route('article_object', $article) }}">{{ $article->title }} </a>
                                <sup class="font-semibold text-gray-500 mb-0">{{ $article->category->name }}</sup>
                            </p>
                            <p class=" text-m font-thin mt-1 ">{{ $article->created_at }}
                                <sub class="text-sm font-thin">{{ $article->created_at->diffForHumans() }}</sub>
                            </p>

                            <p class="text-gray-500 font-light my-4">
                                {!! Str::words($article->article,30) !!}<sub>Read more</sub>
                            </p>




                            {{-- @livewire('like-unlike',['article' => $article],key($article->id)) --}}
                            <div class="flex flex-row justify-start flex-wrap mt-4">
                                <button class="mx-3" wire:click="like_article({{$article}})"> like
                                 </button> <p class="mx-3">unlike</p>    <p> 
                                    <a href="{{ route('article_object', $article) }}">
                                    Comment 
                                </a>
                                </p>   
                                 </div>
                        
                    
                        
                            <hr/>
                            <div class="bg-gray-200 py-2 px-1 rounded-lg mt-2">
                        
                                @foreach ($article->tags as $tag)
                                #{{ $tag->name }} 
                                @endforeach

                            </div>
                        </div>

                    </div>

                    @endforeach
                </div>
                <div class="p-6 bg-white border-b  border-red-700 lg:w-1/5">

                </div>


            </div>
        </div>
    </div>
</x-app-layout>