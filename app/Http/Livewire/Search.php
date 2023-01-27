<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Search extends Component
{
    public $searched_article="";
    public $list;

    public function render()
    {
        return view('livewire.search',[
            'articles' => Article::where('article','like', '%' . $this->searched_article .'%')->get()
        ]);
    }

    public function searched($id)
    {
      
        $this->emit('searched',$id);
        $this->searched_article ="";
    }


   
 
}  