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
                      <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left ">
                        
          
                        @if ($article->image)
                        <img src="/storage/uploads/{{$article->image}}" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"  alt="..." />
          
                        @else
                        <img src="/storage/uploads/logo.jpg" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"  alt="..." />
                        @endif
                        <div class="flex-grow sm:pl-8">
                          <div class="flex flex-wrap columns-2 justify-between">
                          <div class="lg:w-2/3"><h2 class="title-font font-bold text-xl text-gray-900">  <a href="{{ route('article_object', $article) }}">{{ $article->title }} </a></h2></div>
                            <div class="lg:w-1/4"> <a href="#">like </a> <a href="#">Unlike </a> </div>

                          </div>
                          
                          <h3 class="text-gray-500 font-semibold">{{ $article->user->name }}</h3>
                          <h3 class="text-gray-500 mb-3 font-medium">{{ $article->created_at}}</h3>
                          <p class="mb-4">{!! Str::words($article->article,30) !!}<sub>Read more</sub></p>
                         
                  
                            
                        
                          <div class="py-2 px-1 rounded-lg mt-2">                        
                            @foreach ($article->tags as $tag)
                           | #{{ $tag->name }} |
                            @endforeach
                            

                        </div>
                          <div class="mr-4">
                      
                          </div>

                        </div>
                      </div>
                    </div>

                    @endforeach
                </div>
                <div class="p-6 bg-white border-b  border-red-700 lg:w-1/4">

                  <h4 class="text-black text-base">Tags</h4>
                  @foreach ($tags as $tag)
                  <p> #{{ $tag->name }} </p>
                   @endforeach
                   
                </div>


            </div>
        </div>
    </div>
    </section>
</x-app-layout>