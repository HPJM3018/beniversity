<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $imageName = $request->image->store('Imgblog');
        Blogs:: create([
            'titre'=> $request->titre,
            'description'=> $request->description,
            'image'=> $imageName
        ]);

        return redirect()->route('blog')->with('sucess',' le blog a été ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogs $blogs)
    {
        return view('admin.blog.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blogs)
    {
        //
    }
}
