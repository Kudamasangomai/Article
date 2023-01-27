<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        
        <div class="flex flex-wrap m-4">
          
          @foreach($articles as $article)
          <div class="p-4 w-2/3">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              

              @if ($article->image)
              <img src="/storage/uploads/{{$article->image}}" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"  alt="..." />

              @else
              <img src="/storage/uploads/logo.jpg" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"  alt="..." />
              @endif
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">  <a href="{{ route('article_object', $article) }}">{{ $article->title }} </a></h2>
                <h3 class="text-gray-500 mb-3">{{ $article->user->name }}</h3>
                <p class="mb-4">         {!! Str::words($article->article,30) !!}<sub>Read more</sub></p>
                <span class="inline-flex">
                 .................
                </span>
              </div>
            </div>
          </div>

          @endforeach
        
          <div class="p-4 w-1/3  bg-red-400">
            epppppppppppppp  
            </div>
        </div>
      
      </div>
    </section>
</x-app-layout>