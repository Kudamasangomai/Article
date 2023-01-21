<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap  border-b columns-3  overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b mr-1 border-red-700 lg:w-1/5">
                 User info
                </div>
                  <div class="p-6 bg-white border-b mr-1   border-red-700 lg:w-1/2">

                  
              

                    <div class="bg-gray-100 md:flex md:flex-row mb-2 border-b mr-1">
                        
                        <div class="p-2">
                            <img src="https://mdbootstrap.com/img/new/slides/041.jpg" class="max-w-full h-auto  mt-1" alt="..." />
                            <p class=" text-2xl font-bold mt-2 ">
                              {{ $article->title }} 
                                <sup class="font-semibold text-gray-500 mb-0">{{ $article->category->name }}</sup>  
                            </p>
                            <p class=" text-m font-thin mt-1 ">{{ $article->created_at }}
                            <sub class="text-sm font-thin">{{ $article->created_at->diffForHumans() }}</sub></p>
                          
                          <p class="text-gray-500 font-light my-4">
                           {!! ($article->article) !!}
                          </p>
                          <p class="font-semibold text-xl mb-2 text-gray-800">{{ $article->user->name }}</p>
                          <div class="flex justify-start">
                            <p class="mx-3"> like </p>    <p> Comment </p>
                          </div>
                         
                
                        </div>
                       
                      </div>
                      
              
                </div>
                <div class="p-6 bg-white border-b  border-red-700 lg:w-1/4">
                 Some post here api etc
                </div>
                

            </div>
        </div>
    </div>

   
</x-app-layout>
