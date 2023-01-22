<x-app-layout>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-14 mx-auto">
          <div class="flex flex-col text-center w-full mb-10">
           
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">
             Tags</h1>
          </div>
          <div class="flex flex-wrap  ml-36 ">
            <div class="p-4 md:w-3/4 border border-black"" >
              <div class="flex rounded-lg h-full   bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0">
                  T
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Tags</h2>
                </div>
                <div class="flex-grow">
                
                    @livewire('tags')
               
                </div>
              </div>
            </div>
          
           
          </div>
        </div>
      </section>

    
</x-app-layout>