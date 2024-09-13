<?php

namespace App\Http\Controllers;
use App\Models\Blog2;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'Description'=>'required'
        ]);
        $blog['title'] = $request->title;
        $blog['Description'] = $request->Description;

        Blog::insert($blog);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, $title)
    {
        $update['title'] = $request->title;
        $update['Description'] = $request->Description;
        Blog::where('id',$id)->where('title',$title)->update($update);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        // Blog::where('id',$id)->delete();
        Blog::whereId($id)->delete();
        return redirect()->route('blog.index');
    }
}
