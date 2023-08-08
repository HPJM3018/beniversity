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
        $blogs= Blogs::all();
        return view('admin.blog.index',compact('blogs'));
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
    public function show($id)
    {
        $blog= Blogs::find($id);
        return view('blog-details',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blogs::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBlogRequest $request,  $id)
    {
        $blog = Blogs::find($id);
        $arrayUpdate = [
            'titre'=>$request->titre,
            'description'=>$request->description,
        ];
        if($request->image != null){
            $imageName = $request->image->store('Imgblog');
            $arrayUpdate = array_merge($arrayUpdate,
            [
                'image'=>$imageName
            ]);
        }
        $blog->update($arrayUpdate);
        return redirect()->route('blog')->with('sucess',' le blog a été modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blogs)
    {
        //
    }
}
