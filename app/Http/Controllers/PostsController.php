<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{


    public function index() {
      $user = Auth::user();
      $posts = Post::latest()->get();
      return view('posts.index')->with('posts', $posts);
    }

    public function show(Post $post) {
      return view('posts.show')->with('post', $post);
    }

    public function create() {
      return view('posts.create');
    }

    public function store(PostRequest $request) {
      $post = new Post();
      $post->title = $request->title;
      $post->image = $request->image;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }

    public function edit(Post $post) {
      return view('posts.edit')->with('post', $post);
    }

    public function update(PostRequest $request, Post $post) {
      $post->title = $request->title;
      $post->image = $request->image;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }

    public function destroy(Post $post) {
      $post->delete();
      return redirect('/');
    }

}
