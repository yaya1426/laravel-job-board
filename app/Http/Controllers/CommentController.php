<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index() {
        // Eloquent ORM -> Get all data
        $data = Comment::all();

        // Pass the data to the view
        return view('comment.index', ['comments' => $data, "pageTitle" => "Blog"]);
    }

    function create() {
    //    Comment::create([
    //         'author' => 'Yahya',
    //         'content' => 'This is another test comment',
    //         'post_id' => 13
    //     ]);

        Comment::factory(5)->create();

        return redirect('/comments');
    }
}
