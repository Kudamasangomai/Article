<x-app-layout>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      <div class="flex flex-wrap  border-b columns-3  overflow-hidden shadow-sm sm:rounded-lg mt-10">
        <div class="p-6 bg-white border-b mr-1 border-red-700 lg:w-1/5">

        </div>
        <div class="p-6 bg-white border-b mr-1   border-red-700 lg:w-1/2">




          <div class="bg-gray-100 md:flex md:flex-row mb-2 border-b mr-1">

            <div class="p-2">
              @include('layouts.messages')

             
              @if ($article->image)
              <img src="/storage/uploads/{{$article->image}}" class="max-w-full h-auto  mt-1" alt="..." />

              @else

              @endif
              <div class="flex flex-wrap columns-2 justify-between">
              <div class="lg:w-2/4">
              <p class=" text-2xl font-bold mt-2 ">
                {{ $article->title }}
                <sup class="font-semibold text-gray-500 mb-0">{{ $article->category->name }}</sup>
              </p>
              <p class=" text-m font-thin mt-1 ">{{ $article->created_at }}
                <sub class="text-sm font-thin">{{ $article->created_at->diffForHumans() }}</sub>
              </p>
              </div>
              <div class="lg:w-2/4 flex flex-row">
                <div class="mt-2 justify-end"  x-data="{open:false}">
                  @if(Auth::user()->id == $article->user_id)
                  <button class="bg-red-500 px-4 py-1 rounded-md mr-2" x-on:click="open = !open"
                    x-show="!open">Delete</button>
                  <button class="bg-blue-400 px-4 py-1 rounded-md" x-show="!open">
                    <a href="{{ route('articles.edit',$article) }}">
                      Edit
  
                    </a>
                  </button>
  
                  <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button x-cloak class="px-2 py-1 text-white bg-green-600 rounded-sm" x-show="open"> Yes Delete
                    </button>
                  </form>
  
                  <button class="bg-yellow-500 px-4 py-1 rounded-md" x-show="open" x-on:click="open = ! open"
                    x-cloak>Cancel</button>
                  @endif
                </div>   
             
              </div>
            </div>
              <p class="text-gray-500 font-light my-4">
                {!! ($article->article) !!}
              </p>
              <p class="font-semibold text-xl mb-2 text-gray-800">{{ $article->user->name }}</p>
              <div class="flex justify-start">
                <p class="mx-3"> like </p>    <p class="mx-3"> Unlike </p>
              </div>

             


            </div>

          </div>
          <label>Add comment</label>
          <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            <input type="hidden" name="article_id" value="{{ $article->id }}" />
            <textarea class="w-full h-18 rounded-md" name="comment">
          </textarea>
            <button type="submit" class="bg-green-600 py-1 px-3 rounded-md text-white mb-1">Comment</button>

          </form>




          <div class="bg-gray-200 mt-4 p-3">
            <h3 class="text-lg font-semibold mt-1">Comments   ({{  $article->comments->count() }})</h3>
            @foreach ( $article->comments as $comment )
           
            <p class="font-bold mt-2">{{ $comment->user->name }}</p><span class="text-sm">{{ $comment->created_at->diffForHumans() }}</span>
            
            <p class="text-gray-500 font-light"> {{ $comment->comment }}</p>
            @endforeach
        

          </div>
        </div>
        <div class="p-6 bg-white border-b  border-red-700 lg:w-1/4">
pppp
        </div>


      </div>


    </div>

  </div>

  </div>


</x-app-layout>