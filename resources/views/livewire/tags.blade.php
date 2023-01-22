<div>    
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            @if ($tagslist)
          <table class="min-w-full">
            <thead class="bg-white border-b">
              <tr>
              
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  First
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Last
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Handle
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Handle
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
                    {{ $tag->name }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $tag->name }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                   <button class="bg-yellow-400 py-1 px-3"
                   wire:click="update_tag({{$tag->id}})"
                   >
                    Edit 
                </button> 
                </td>
              </tr>
           @endforeach
            </tbody>
          </table>
@elseif ($updatetagform)

@include('livewire.update-tag')
{{-- livewire('update-tag') --}}

          @endif
        </div>
      </div>
    </div>
  </div>
</div>
