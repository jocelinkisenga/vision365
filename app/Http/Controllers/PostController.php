<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.addArticle");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $imgName = Carbon::now()->timestamp .'patrickngoy.' . $request->file('image')->extension();
        $path = $request->file("image")->storeAs('uploads',$imgName,'public');

        Post::create([
            "title" => $request->title,
            "slug" => $request->slug,
            "image" => $imgName,
             "description" => $request->description
        ]);

        return redirect()->route("dashboard");

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $post = Post::findOrFail($id);
        return view("pages.post-details",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(int $id)
    {
        Post::destroy($id);
        return redirect()->back();
    }
}
