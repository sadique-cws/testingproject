<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use Auth;

class PostController extends Controller
{
    public function index(){
        
        return view('work.home',['blogs'=>Post::all()]);
    }

  
    public function create(){
        
        if(Auth::guest()){
            return redirect()->route('login');
        }
        
        return view('work.insert');
    }

    
    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
        ]);

        $blog = new Post();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->body = $request->body;
        $blog->user_id = Auth::id();
        $blog->save();
        $request->session()->flash('msg',"<div class='alert alert-success'>Data inserted successfully</div>");
        return redirect()->route('post.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //

        return view('work.edit',['record'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
        ]);

        $post->title = $request->title;
        $post->author = $request->author;
        $post->body = $request->body;
        $post->user_id = Auth::id();
        $post->save();

        $request->session()->flash('msg',"<div class='alert alert-success'>Data updated successfully</div>");
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post,Request $request)
    {
        //
        $post->delete();
        $request->session()->flash("msg","<div class='alert alert-danger'>Delete Data successfully</div>");

        return redirect()->route('post.index');
    }
}
