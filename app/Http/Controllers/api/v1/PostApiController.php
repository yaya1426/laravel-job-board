<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::paginate(25);
        return response($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Post::create($request->all());
        return response(['data' => $data, 'message' => 'Post created successfully!'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::find($id);

        if(!$data) {
            return response(["message" => "Post not found!"], 404);
        }

        return response($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id);
        
        if(!$data) {
            return response(["message" => "Post not found!"], 404);
        }

        $data->update($request->all());

        return response($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::find($id);

        if(!$data) {
            return response(["message" => "Post not found!"], 404);
        }
        
        $data->delete();

        return response(null,204);
    }
}
