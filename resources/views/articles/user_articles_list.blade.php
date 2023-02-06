<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
            <div class="flex flex-wrap  border-b columns-3  overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b mr-1 border-red-700 lg:w-1/5">
                 User info
                </div>
                  <div class="p-6 bg-white border-b mr-1   border-red-700 lg:w-1/2">
                    @if(session('success'))
  @include('layouts.messages')
@endif
                    @foreach($articles as $article)
              

                    <div class="bg-gray-100 md:flex md:flex-row mb-2 border-b mr-1">
                        
                        <div class="p-2">
                        
                          <div class="flex flex-wrap columns-2 justify-between">
                            <div class="lg:w-2/4">                          
                              @if ($article->image)
                              <img src="/storage/uploads/{{$article->image}}" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" alt="..." />
    
                              @else
                              <img src="/storage/uploads/logo.jpg"
                              class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" alt="..." />
    
                              @endif 
                            </div>
                            <div class="lg:w-2/4 flex flex-row">
                              <p class=" text-2xl font-bold mt-2 ">
                                <a href="{{ route('article_object', $article) }}">{{ $article->title }} </a>
                                <sup class="font-semibold text-gray-500 mb-0">{{ $article->category->name }}</sup>  
                            </p>
                           
                            </div>
                          </div>
                          <p class=" text-m font-thin mt-1 ">{{ $article->created_at->format('d.M.Y - H:i') }}
                            <sub class="text-sm font-thin">{{ $article->created_at->diffForHumans() }}</sub></p>
                          <p class="text-gray-500 font-light my-4">
                           {!! Str::words($article->article,30) !!}<sub>
                            <a href="{{ route('article_object', $article) }}"> Read more </a> 
                          </sub>
                          </p>
                          <p class="font-semibold text-xl mb-2 text-gray-800">{{ $article->user->name }}</p>
                          <div class="flex justify-start mt-2" x-data="{open:false}">
                            @if(Auth::user()->id == $article->user_id)
                            <button class="bg-red-500 px-4 py-1 rounded-md mr-2" x-on:click="open = !open"
                              x-show="!open">Delete</button>
                            <button class="bg-blue-500 px-4 py-1 rounded-md" x-show="!open">
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
                         <div class=" py-2 px-1 rounded-lg w-full mt-5">
                         <p class="font-bold">Tags</p>
                          @foreach ($article->tags as $tag)
                          {{ $tag->name }} |
                          @endforeach
                         
                         </div>
                
                        </div>
                       
                      </div>
                      
                    @endforeach
                </div>
                <div class="p-6 bg-white border-b  border-red-700 lg:w-1/4">
                 Some post here api etc
                </div>
                

            </div>
        </div>
    </div>

   
</x-app-layout>
