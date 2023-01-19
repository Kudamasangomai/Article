<x-app-layout>

    <style>
        [x-cloak] {
            display: none !important
        }

        ;
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="lg:w-1/6">

                </div>
                <div class="p-6 bg-white border-b mr-1 border-red-700 lg:w-4/6">



                    @include('layouts.messages')

                    <table class="table-auto border-collapse  border-spacing-2 w-full ">
                        <thead>
                            <tr class="border border-slate-600 mt-2">
                                <th>Category name</th>
                                <th>Date created</th>
                                <th>date Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $object)
                        <tbody>
                            <tr>
                                <td>{{ $object->categoryname }}</td>
                                <td>{{ $object->created_at }}</td>
                                <td>{{ $object->updated_at }}</td>
                                <td>
                                    <div x-data="{
                        open:false
                      }">


                                        <button x-show="!open"
                                            class="px-2 py-1 text-white bg-yellow-500 rounded-sm mr-2"><a
                                                href="/categories/{{ $object->id }}/edit"> Edit</a> </button>
                                        <button class="px-2 py-1 text-white bg-red-500 rounded-sm"
                                            x-on:click="open = !open" x-show="!open"> Delete </button>

                                        <form action="{{ route('categories.destroy', $object->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button x-cloak class="px-2 py-1 text-white bg-red-600 rounded-sm"
                                                x-show="open"> Yes Delete </button>
                                        </form>
                                        <button x-cloak class="px-2 py-1 text-white bg-blue-600 rounded-sm"
                                            x-on:click="open = ! open" x-show="open"> Cancel </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>








                </div>



            </div>


        </div>
    </div>
</x-app-layout>