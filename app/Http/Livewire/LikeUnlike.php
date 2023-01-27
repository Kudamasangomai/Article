<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class LikeUnlike extends Component
{
  public $article;
  public function mount(Article $a)
  {
    $this->article = $a::all();
  }
    public function render()
    {
    
        return view('livewire.like-unlike');
    }

    public function like_article($id)
    {
       // $this->article = Article::find($id);
        dd($id);
    }

    public function unlike_article()
    {
    }

    public function like_discussion($id)
    {
      dd($id);
        // $likes  = new discussion_likes();
        // $likes->discussion_id = $id;
        // $likes->user_id = Auth::user()->id;
        // $likes->save();
    }

 
}
