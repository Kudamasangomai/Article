<div class="bg-green-500 rounded-sm p-2 w-full text-white"
    x-data="{show:true}"
    x-init="setTimeout(()=> show=false,3000)"
    x-show="show"
    >
        {{session('success')}}
    </div>