<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class Tags extends Component
{
    use WithPagination;
    public $updatetagform = false;
    public $tagslist = true;
    public $add_tag_form = false;
    public  $tagobject = false;
    public $name,$tagid;

    public function render()
    {
     
        $tags = Tag::paginate(5);
        return view('livewire.tags',compact('tags'));
    }
    protected $rules = [
        'name' => 'required|max:15|min:3|unique:tags|alpha',
       
    ];
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    // show existing Tag data in edit form
    public function update_tag($id)
    {
        $tag = Tag::findOrFail($id);
        $this->name = $tag->name;
        $this->tagid = $tag->id;
        $this->updatetagform = true;
        $this->tagslist = false;
       

    }
// update the tag data
    public function updatetag()
    {
        $this->validate();
        try {
            Tag::whereId($this->tagid)->update([
           'name'=> $this->name,
            ]);
            session()->flash('success','Tag Updated');
            $this->tagslist = True;
            $this->add_tag_form = false;
            $this->reset();
        } catch (\Throwable $th) {
            session()->flash('error','Soemthing ent Wrong');
        }
        
    }

    // returns back to page or component which consist of tags list
    // false deactivate the acctive component
    public function return(){
        $this->updatetagform = false;
        $this->tagslist = true;
    }

    // opens a form to add Tags
    public function add_tag_form()
    {
        $this->updatetagform = false;
        $this->tagslist = false;
        $this->add_tag_form = true;
    }

    public function store_tag()
    {
        $this->validate();
        try {
            Tag::create([
                'name' => $this->name,
            ]);
            session()->flash('success','Tag Created');
            $this->tagslist = True;
            $this->add_tag_form = false;
            $this->reset();
        } catch 
        
        (\Throwable $th) {
           session()->flash('error','Soemthing ent Wrong');
        }


        
    }

    public function view_tag($id)
    {
        $tag = Tag::find($id);
        $this->name = $tag->name;
        $this->tagobject = True;
        $this->tagslist= false;


    }

   
}
