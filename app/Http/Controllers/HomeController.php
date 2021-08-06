<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        
        $categories = Category::all();
$contents=Content::orderBy('created_at','DESC')->get();
$most_recent=Content::orderBy('created_at','DESC')->take(3)->get();

        $important = Content::where('important', 'yes')->orderBy('created_at','DESC')->take(2)->get();
        $important_3 = Content::where('important', 'yes')->orderBy('created_at','DESC')->take(3)->get();
        $tops = Content::orderBy('visitor','DESC')->take(4)->get();
        $most_viewed = Content::orderBy('visitor','DESC')->take(3)->get();
        $acontents=Content::orderBy('created_at','DESC')->take(9)->get();
      
        return view('index', [
            'categories' => $categories,
            'important' => $important,
            'tops' => $tops,
            'contents'=>$contents,
            'most_viewed'=>$most_viewed,
            'most_recent'=>$most_recent,
            'important_3'=>$important_3,
            'acontents'=>$acontents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::findOrFail($id);

        $content->visitor++;
        $content->save();

        $category_id = $content->category_id;

        $categories = Category::all();
        $category = Category::findOrFail($category_id);
        return view('single-page', [
            'content' => $content,
            'category' => $category,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
