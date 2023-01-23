<div>    
<div class="flex flex-col">
 
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        
       
        <div class="overflow-hidden">
         
          
            @if ($tagslist)
            <div class="flex flex-wrap justify-between">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0">
              T
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium mr-4">Tags List</h2>
              
            </div>
          
          
       
            <div class="justify-center">
              <button 
              class="text-md font-medium title-font text-gray-900 bg-green-500 rounded-md
                    py-1 px-3 hover:bg-green-400 mb-2 mr-28"
                    wire:click="add_tag_form()"> Add Tag</button>
              </div>
            </div>
            @include('layouts.messages')
          <table class="min-w-full">
            <thead class="bg-white border-b">
              <tr>
              
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                 Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                 Created @
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                 Updated @
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                   Action
                  </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
              <tr class="bg-gray-100 border-b">
      
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $tag->name }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $tag->created_at }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $tag->updated_at }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <button class="bg-blue-500 rounded-sm py-1 px-3 text-white"
                  wire:click="view_tag({{$tag->id}})"
                  >
                  View
                </button>
                   <button class="bg-yellow-500 rounded-sm py-1 px-3 text-white"
                   wire:click="update_tag({{$tag->id}})"
                   >
                    Edit 
                </button> 

                <button class="bg-red-500 rounded-sm py-1 px-3 text-white"
                wire:click="update_tag({{$tag->id}})"
                >
                 Delete
             </button>
                </td>
              </tr>
           @endforeach
           {{ $tags->links() }}
            </tbody>

          
          </table>
@elseif ($updatetagform)

@include('livewire.update-tag')


@elseif ($add_tag_form)


@include('livewire.tag-add-form')

@elseif ($tagobject)

@include('livewire.tag-object')
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
