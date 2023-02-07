<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  <section class="text-gray-600 body-font">

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-wrap  border-b columns-3  overflow-hidden shadow-sm sm:rounded-lg mt-10">

          <div class="p-6 border-b mr-1   border-red-700 lg:w-2/3 ml-20 bg-white ">

            @if(session('success'))
            <div class="bg-green-500 rounded-sm p-2 w-full text-white" x-data="{show:true}"
              x-init="setTimeout(()=> show=false,3000)" x-show="show">
              {{session('success')}}
            </div>
            @endif
            @foreach($articles as $article)


            <div class="p-4">
              <div
                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left ">


                @if ($article->image)
                <img src="/storage/uploads/{{$article->image}}"
                  class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" alt="..." />

                @else
                <img src="/storage/uploads/logo.jpg"
                  class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" alt="..." />
                @endif
                <div class="flex-grow sm:pl-8">
                  <div class="flex flex-wrap columns-2 justify-between">
                    <div class="lg:w-2/4">
                      <h2 class="title-font font-bold text-xl text-gray-900"> <a
                          href="{{ route('article_object', $article) }}">{{ $article->title }} </a></h2>
                    </div>
                    <div class="lg:w-2/4 flex flex-row">

                      <h3 class="text-gray-500 mb-3 font-medium text-sm">{{ $article->created_at->format('d F Y - h
                        m')}}

                        <sub>{{ $article->created_at->diffForHumans() }}</sub>
                      </h3>
                    </div>

                  </div>

                  <h3 class="text-gray-500 font-semibold"><a href="{{ route('user_articles',$article->user_id) }}">{{ $article->user->name }}</a></h3>

                  <p class="mb-4">{!! Str::words($article->article,30) !!}<sub>Read more</sub></p>

                  <p class="mb-4">{!! Str::of($article->article)->wordCount() !!} words</p>





                  <div class="py-2 px-1 rounded-lg mt-2">
                    @foreach ($article->tags as $tag)
                    #{{ $tag->name }}
                    @endforeach



                  </div>
                  <div class="mr-4 flex flex-row">
                    <span class="bg-green-500 rounded-md px-3 mr-2"> {{ $article->likes->count() }} {{
                      Str::plural('like',$article->likes->count()) }}</span>
                    @if ($article->userliked(auth()->user()))
                    <p class="mr-2">
                    <form action="{{ route('likes.destroy', $article->id ) }}" method="POST">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button class="mr-2">

                        UnLike
                      </button>
                    </form>
                    </p>
                    @else

                    <form action="{{ route('likes.store', $article->id ) }}" method="POST">
                      @csrf
                      <button class="mr-2">

                        Like
                      </button>
                    </form>
                    @endif




                    <p class="mr-2">

                      {{ Str::plural('Comment',$article->comments->count()) }}({{ $article->comments->count() }})

                    </p>




                  </div>

                </div>
              </div>
            </div>

            @endforeach

            {{ $articles->links() }}

     
          </div>
          <div class="p-6 bg-white border-b  border-red-700 lg:w-1/4"
            x-data="{open:false,view:false,open_article:false}" x-cloak>

            <button>
              <h4 class="text-black font-bold text-lg underline" x-on:click="open = !open">Tags</h4>
            </button>
            <div x-show="open">
              @foreach($tags as $tag)
              <p class="mt-1"> #{{ $tag->name }} </p>
              @endforeach
            </div>
            <hr>
            <h4 class="text-black mt-2 underline font-bold text-lg" x-on:click="view = !view">Categories</h4>
            <div x-show="view">
              @foreach($categories as $cat)
              <p class="mt-1"> #{{ $cat->categoryname }} </p>
              @endforeach
            </div>


            <h4 class="text-black  mt-2 underline font-bold text-lg" x-on:click="open_article = !open_article">Latest
              Topics</h4>
            <div x-show="open_article">
              @foreach($Latest_articles as $Latest_articles)
              <p class="mt-1"> <a href="{{ route('article_object', $Latest_articles->id)  }}">{{ $Latest_articles->title
                  }}</a> </p>
              @endforeach
            </div>

            <div>
              <select class="w-full p-1">
                <option>BBC</option>
                <option>Aljezira</option>
                <option>CNBC</option>
              </select>
              <div>
                
                @foreach((array)$news as $new)
                  {{ $new }}
                @endforeach
              </div>
            </div>



          </div>




        </div>
      </div>
    </div>
  </section>
</x-app-layout>