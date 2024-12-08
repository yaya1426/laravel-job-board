<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index() {
        // Eloquent ORM -> Get all data
        $data = Tag::all();

        // Pass the data to the view
        return view('tag.index', ['tags' => $data, "pageTitle" => "Tags"]);
    }

    function create() {
        Tag::create([
            'title' => 'CSS',
        ]);

        return redirect('/tags');
    }

    function testManyToMany() {
        // $post15 = Post::find(15);
        // $post17 = Post::find(17);

        // $post15->tags()->attach([1, 2]);
        // $post17->tags()->attach([1]);

        // return response()->json(([
        //     'post15' => $post15->tags,
        //     'post17' => $post17->tags
        // ]));

        $tag = Tag::find(2);

        $tag->posts()->attach([17]);

        return response()->json(([
            'tag' => $tag->title,
            'posts' => $tag->posts
        ]));
    }
}
