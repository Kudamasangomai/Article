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
                      <h3 class="text-gray-500 mb-3 font-medium text-sm">{{ $article->created_at->format('d F Y')}}
                        <sub>{{ $article->created_at->diffForHumans() }}</sub>
                      </h3>
                    </div>

                  </div>

                  <h3 class="text-gray-500 font-semibold">{{ $article->user->name }}</h3>
                  
                  <p class="mb-4">{!! Str::words($article->article,30) !!}<sub>Read more</sub></p>

                  <div class="py-2 px-1 rounded-lg mt-2">
                    @foreach ($article->tags as $tag)
                    | #{{ $tag->name }} |
                    @endforeach


                 
                  </div>
                  <div class="mr-4 flex flex-row">
                    {{-- <div> <a href="#">
                      <svg class="w-200 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800">

                        <path
                          d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 
                         24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z" />
                      </svg>
                    </a> </div>
                    <div><a href="www.google.com">
                      <svg  class="w-200 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                          d="M0 56v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H24C10.745 32 0 42.745 0 56zm40 200c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24-24-10.745-24-24zm272 256c-20.183 0-29.485-39.293-33.931-57.795-5.206-21.666-10.589-44.07-25.393-58.902-32.469-32.524-49.503-73.967-89.117-113.111a11.98 11.98 0 0 1-3.558-8.521V59.901c0-6.541 5.243-11.878 11.783-11.998 15.831-.29 36.694-9.079 52.651-16.178C256.189 17.598 295.709.017 343.995 0h2.844c42.777 0 93.363.413 113.774 29.737 8.392 12.057 10.446 27.034 6.148 44.632 16.312 17.053 25.063 48.863 16.382 74.757 17.544 23.432 19.143 56.132 9.308 79.469l.11.11c11.893 11.949 19.523 31.259 19.439 49.197-.156 30.352-26.157 58.098-59.553 58.098H350.723C358.03 364.34 384 388.132 384 430.548 384 504 336 512 312 512z" />
                      </svg>
                    </a></div>
                    <div><a href="#">b
                      <svg class="w-200 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800">
                        <path
                          d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 
                          466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 
                          19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z" />p
                      </svg>
                    </a> </div> --}}

                 
                    <p class="mr-2">like </p>
                    
                    <p class="mr-2">Unlike </p>
                    
                    <p class="mr-2">
                    
                      {{ Str::plural('Comment',$article->comments->count()) }}({{ $article->comments->count() }})
                 
                    </p>

                    
                     
                 
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