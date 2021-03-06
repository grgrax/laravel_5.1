<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

use Input;
use Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts=Post::get();
        // dd($posts);
        return view('admin/post/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/post/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post=new Post;
        $post->title=Input::get('title');
        $post->slug=str_slug(Input::get('title'));
        $post->user_id=4;
        $post->save();
        return Redirect::route('dashboard::post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return die("s");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {
        $post=Post::where('slug',$slug)->get()->first();
        // dd($post);
        return view('admin/post/edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($slug)
    {
        $post=Post::where('slug',$slug)->get()->first();
        $post->title(Input::get('title'));
        $post->save();
        return redirect(route('dashboard::post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
