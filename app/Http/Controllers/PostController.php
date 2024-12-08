<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {
        // Eloquent ORM -> Get all data
        $data = Post::paginate(10);

        // Pass the data to the view
        return view('post.index', ['posts' => $data, "pageTitle" => "Blog"]);
    }

    function show($id) {
        $post = Post::find($id);

        return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
    }

    function create() {
        // $post = Post::create([
        //     'title' => 'My Find Unique post 1',
        //     'body' => 'This is to test find',
        //     'author' => 'Yahya',
        //     'published' => true
        // ]);
        
        Post::factory(1000)->create();

        return redirect('/blog');
    }

    function delete() {
        Post::destroy(13);
    }
}
