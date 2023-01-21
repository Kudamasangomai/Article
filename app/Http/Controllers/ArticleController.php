<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with(['tags'])->latest()->get();
        return view('articles.articleslist',compact('articles'));
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
        return view('articles.articleform',compact('categories','tags'));
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
            'title' => 'required|max:30|min:3',
            'article' => 'required',
            'image'=>'image|nullable|max:1999',
        ]);


        $form = Article::create([
            'title' => $request->title,
            'article' => $request->article,
            'image' => $filename ?? null,
            'user_id' => auth()->user()->id,
            'category_id'=> $request->category,
        ]);
        // $form['user_id'] = auth()->user()->id;
        // $form['image'] = $filename ?? null;
        // $form['category_id']= $request->category;      
        // // Article::create($form);
        //dd($form);


        if ($request->has('tags')) {
            $form->tags()->attach($request->tags);
        }
        return redirect('/articles')->with('success','Post Created');
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
        return view('articles.article',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
