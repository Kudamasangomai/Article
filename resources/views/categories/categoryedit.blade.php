<x-app-layout>
    
    <style>
        [x-cloak] { display: none !important}; 
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="lg:w-1/5">
               
                </div>
                  <div  class="p-6 bg-white border-b mr-1 border-red-700 lg:w-3/5">
              

                    <form action="{{ route('categories.update',$category->id ) }}" method="POST">
                        @csrf
                        @method('PUT')
                      
                     <input type="text" name="categoryname" class="w-full rounded-sm border-b-none border-blue-600" value="{{ $category->categoryname }}"/>   

                     <button class="rounded-md px-3 py-1 bg-green-500 mt-2"> Update </button>
             
      
                    </form>
        
             
             
           


                  
                </div>
              
            
      
            </div>
                      
          
        </div>
    </div>
</x-app-layout>
