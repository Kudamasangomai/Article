<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">

            @foreach($articles as $article)
            <div class="p-4 md:w-1/4">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
     

                @if ($article->image)
                <img src="/storage/uploads/{{$article->image}}" class="lg:h-48 md:h-36 w-full object-cover object-center" alt="..." />

                @else
                <img src="/storage/uploads/logo.jpg" class="lg:h-48 md:h-36 w-full object-cover object-center" alt="..." />
                @endif
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $article->category->name }}</h2>
                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3"> <a href="{{ route('article_object', $article) }}">{{ $article->title }} </a></h1>
                  <p class="leading-relaxed mb-3">{!! Str::words($article->article,30) !!}</p>
                  <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center lg:mb-0">Reead More
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>6
                    </span>
                  </div>
                </div>
              </div>
            </div>
          
            @endforeach
          </div>
        </div>
      </section>
      <section class="mb-20 text-gray-700">
        <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
          <h3 class="text-3xl font-bold mb-6 text-gray-800">Testimonials</h3>
          <p class="mb-6 pb-2 md:mb-12 md:pb-0">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam
            iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
            porro a pariatur veniam.
          </p>
        </div>
      
        <div class="grid md:grid-cols-3 gap-6 text-center">
          <div>
            <div class="block rounded-lg shadow-lg bg-white">
              <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #9d789b;"></div>
              <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
              </div>
              <div class="p-6">
                <h4 class="text-2xl font-semibold mb-4">Maria Smantha</h4>
                <hr />
                <p class="mt-4">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                  </svg>
                  Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="block rounded-lg shadow-lg bg-white">
              <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #7a81a8;"></div>
              <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" />
              </div>
              <div class="p-6">
                <h4 class="text-2xl font-semibold mb-4">Lisa Cudrow</h4>
                <hr />
                <p class="mt-4">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                  </svg>
                  Neque cupiditate assumenda in maiores
                  repudi mollitia architecto.
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="block rounded-lg shadow-lg bg-white">
              <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #6d5b98;"></div>
              <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
              </div>
              <div class="p-6">
                <h4 class="text-2xl font-semibold mb-4">John Smith</h4>
                <hr />
                <p class="mt-4">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                  </svg>
                  Delectus impedit saepe officiis ab
          
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>