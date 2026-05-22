<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('hello', compact('posts'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=> 'required | max:100',
            'content'=> 'required'
        ]);

        Post::create([
            'title'=> $request->title,
            'content'=> $request->content
        ]);
        return redirect('/posts');
    }
    public function show($id){
        $post = Post::find($id);
        return view('show', compact('post'));
    }
    public function edit($id){
        $post = Post::find($id);
        return view('edit', compact('post'));
    }
    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts');
    }
    public function destroy($id){
        $post = Post::find($id)->delete();
        return redirect('/posts');
    }
}

