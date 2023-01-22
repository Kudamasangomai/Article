<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class Tags extends Component
{

    public $updatetagform = false;
    public $tagslist = true;
    public $name;

    public function render()
    {
     
        $tags = Tag::all();
        return view('livewire.tags',compact('tags'));
    }
    protected $rules = [
        'name' => 'required|max:25|min:5|unique:tags',
       
    ];
    public function updated($property)
    {
        $this->validateOnly($property);
    }
    public function update_tag($id)
    {
        $tag = Tag::findOrFail($id);
        $this->name = $tag->name;
        $this->updatetagform = true;
        $this->tagslist = false;

    }
    public function return(){
        $this->updatetagform = false;
        $this->tagslist = true;
    }
}
