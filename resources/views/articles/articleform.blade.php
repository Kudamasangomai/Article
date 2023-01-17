<x-app-layout>
    
    <style>
        [x-cloak] { display: none !important}; 
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="lg:w-1/5">
               
                </div>
                  <div 
                  class="p-6 bg-white border-b mr-1 border-red-700 lg:w-1/2"
                  x-data ="{
                    open:false
                  }"
                
                  >
                  @error('categoryname')
                  <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
                  @enderror
                    <form method="POST" action="{{ route('articles.store') }}" x-show="!open">
                        @csrf
                 <p class=" text-3xl font-bold">Artile Title </p>
                @error('title')
                   <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
                @enderror
                 <input type="text" class=" rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="title" value="{{ old('title') }}"/>
                 <p class=" text-2xl font-bold">Article Content </p>
                 @error('article')
                 <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
             @enderror
                 <textarea class="rounded-md text-black  h-20 w-full mb-2 bg-gray-100" name="article">
                    {{ old('article') }}
                </textarea>

                @error('category_id')
                <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
            @enderror
                <select  name="category" id="category" class="block w-full mt-1 mb-2">
                    <option value="0">--- SELECT CATEGORY ---</option>
                    @foreach ($categories as $category)
                        <option  value="{{ $category->id }}"
                                @if ($category->id == old('category')) selected @endif>{{ $category->categoryname }}</option>
                    @endforeach
                </select>

                 <button class="rounded-md py-1 px-4 bg-green-500 border-b border-black">Post</button>
                 <button class="rounded-md py-1 px-4 bg-yellow-400 border-b border-black">
                    <a href="/dashboard">
                    Cancel</a></button>
                 <button class="rounded-md py-1 px-4 bg-blue-400 border-b border-black"
                 x-on:click="open = ! open"
                 > <a href="#"> + Categories</a></button>
                    </form>


                    <div x-show="open" x-cloak >
                        <p class=" text-2xl font-thin mb-2">Category name </p>
                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf
                       <input type="text" class=" rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="categoryname" value="{{ old('categoryname') }}"/>
                     
                       <button class=" rounded-md py-1 px-4 mr-2 bg-green-500 border-b border-black"  x-on:click="open = open">
                        Submit</button>
                       <button class=" rounded-md py-1 px-4 bg-blue-400 border-b border-black"
                       x-on:click="open = ! open"
                       >
                       <a href="#">
                        close</a></button>
                        </form>
                        <p class="my-2 font-semibold underline p-1">Availabe Categories</p>
                        @foreach ($categories as $category)
                        <p class="mt-2">{{ $category->categoryname }}</p>  
                        @endforeach
                        
                        <p class="font-light"><a href="/categories"> View All Categories</a></p>
                   
                    </div>
                </div>
              
                <div class=" lg:w-1/4">
            
                </div>
      
            </div>
                      
          
        </div>
    </div>
</x-app-layout>
