<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article_Comments as commentmodel;
use App\Http\Requests\CommentRequest;

class comment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       $form = $request->validate([
            'comment' => 'required',
         
        ]);
        $form['comment'] = $request->comment;
        $form['user_id'] = auth()->id();
        $form['article_id'] =  $request->article_id;
        commentmodel::create($form);
        return redirect()->back()->with('success','Comment Created');

    }

    // $post = auth()->user()->posts()->create([
    //     'title' => $request->title,
    //     'image' => $filename ?? null,
    //     'post' => $request->post,
    //     'category_id' => $request->category
    // ]);
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
