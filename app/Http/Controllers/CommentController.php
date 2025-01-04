<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::paginate(10);
        return view('comment.index', ['comments' => $comments, 'pageTitle' => 'Comments']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create', ['pageTitle' => 'Create New Comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @TODO: this will be completed in the Forms section
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::find($id);
        return view('comment.show', ['comment' => $comment, 'pageTitle' => 'View Comment']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::find($id);
        return view('comment.edit', ['comment' => $comment, 'pageTitle' => 'Edit Comment']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // @TODO: this will be completed in the Forms section
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // @TODO: this will be completed in the Forms section
    }
}
