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
              

              
                        
             
         <table class="table-auto border-collapse  border-spacing-2 w-full ">
            <thead>
           <tr class="border border-slate-600"> <th>Category name</th>    <th>Date created</th>    <th>date Updated</th>     <th>Action</th>
           </tr> </thead>
            @foreach ($categories as $object)
            <tbody>
            <tr>
                <td>{{ $object->categoryname  }}</td>
                <td>{{ $object->created_at  }}</td>
                <td>{{ $object->updated_at  }}</td>
                <td>delete</td>
            </tr>
            </tbody>
            @endforeach
         </table>
             
        
             
             
           


                  
                </div>
              
            
      
            </div>
                      
          
        </div>
    </div>
</x-app-layout>
