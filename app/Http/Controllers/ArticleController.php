<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleUpdateformRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $articles = Article::where('user_id', $user_id)->with(['tags'])->latest()->get();


        // return view('articles.articleslist',compact('articles'));
        return view('articles.articleslist', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = category::all();
        return view('articles.articleform', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->has('image')) {
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('uploads', $filename, 'public');
        }

        $request->validate([
            'title' => 'required|max:70|min:3',
            'article' => 'required',
            'image' => 'image|nullable|max:1999',
        ]);


        $form = Article::create([
            'title' => $request->title,
            'article' => $request->article,
            'image' => $filename ?? null,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category,
        ]);
        // $form['user_id'] = auth()->user()->id;
        // $form['image'] = $filename ?? null;
        // $form['category_id']= $request->category;      
        // // Article::create($form);
        //dd($form);


        if ($request->has('tags')) {
            $form->tags()->attach($request->tags);
        }
        return redirect('/dashboard')->with('success', 'Article Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        $article =  Article::find($article);
        $tags = Tag::all();
        $categories = category::all();
        return view('articles.editarticle',compact('article','categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdateformRequest  $request,Article $article)
    {
   
        $article->update($request->validated());
        return redirect()->route('article_object',$article)->with('success','Article Updated');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article->image) {
            Storage::delete('public/uploads/' . $article->image);
        }
        $article->delete();
        return redirect('/dashboard')->with('success', 'Article Deleted');



     

        // $post->tag()->detach();
    
    }
}
