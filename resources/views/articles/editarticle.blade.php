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
                    <form method="POST" action="{{ route('articles.update',$article) }}" enctype="multipart/form-data" x-show="!open">
                        @csrf
                        @method('PUT')
                        <p class=" text-3xl font-bold">Image </p>
                        @if ($article->image)
                        <img src="/storage/uploads/{{$article->image}}" class="max-w-full h-auto  mt-1" alt="..." />

                        @else

                        @endif
                        <input type="file" class=" rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="image" >
                 <p class=" text-3xl font-bold">Artile Title </p>
                @error('title')
                   <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
                @enderror
                 <input type="text" class=" rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="title" value="{{ $article->title }}"/>
                 <p class=" text-2xl font-bold">Article Content </p>
                 @error('article')
                 <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
             @enderror
                 <textarea class="rounded-md text-black  h-20 w-full mb-2 bg-gray-100" id="editor" name="article">
                    {{ $article->article }}
                </textarea>

                <p class=" text-md font-bold mt-2">Category </p>
                @error('category_id')
                <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
            @enderror
            <select  name="category" id="category" class="block w-full mt-1 mb-2">
                <option value="0">{{ $article->category->categoryname}}</option>
                @foreach ($categories as $category)
                    <option  value="{{ $category->id }}"
                            @if ($category->id == old('category')) selected @endif>{{ $category->categoryname }}</option>
                @endforeach
            </select>
<div class="py-2">
            <span class="text-gray-700 text-md mt-2">
                Tags
            
            </span>
            <select name="tags[]" class="block w-full my-2" multiple>
            @foreach ($tags as $tag )
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
      Selected Tags ->  
        @foreach ($article->tags as $tag)
        | {{ $tag->name }} |
        @endforeach
</div>
                <div class="mt-3">
                 <button class="rounded-md py-1 px-4 bg-green-500 border-b border-black">Update</button>
                 <button class="rounded-md py-1 px-4 bg-yellow-400 border-b border-black">
                    <a href="/dashboard">
                    Cancel</a></button>
                </div>
                    </form>


                </div>
              
                <div class=" lg:w-1/4">
            
                </div>
      
            </div>
                      
          
        </div>
    </div>
    @push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endpush('scripts')
</x-app-layout>
