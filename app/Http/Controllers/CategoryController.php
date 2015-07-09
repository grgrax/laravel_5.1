<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use Input;
use Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories=Category::get();
        return view('admin/category/index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/category/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $category=new Category;
        $category->title=Input::get('title');
        $category->slug=str_slug(Input::get('title'));
        $category->save();
        return Redirect::route('dashboard::category');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {
        $category=Category::where('slug',$slug)->get()->first();
        // dd($category);
        return view('admin/category/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($slug)
    {
        $category=Category::where('slug',$slug)->get()->first();
        $category->title=Input::get('title');
        $category->save();
        return Redirect::route('dashboard::category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($slug)
    {
        $category=Category::where('slug',$slug)->get()->first();
        $category->delete();
        return Redirect::route('dashboard::category');
    }
}
