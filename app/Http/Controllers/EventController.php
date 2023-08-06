<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/event');
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'location' => 'required',
            'category_id' => 'required',
        ]);

        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            
            Category::create([
                'title' => $request->title,
                'image' => $filename,
                'date' => $request->date,
                'time' => $request->time,
                'description' => $request->description,
                'location' => $request->location,
                'category_id' => $request->category_id,
            ]);
        }

        return redirect("dashboard/category")->withSuccess('You have signed-in');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'location' => 'required',
            'category_id' => 'required',
        ]);

        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);

            Category::whereId($id)->update([
                'title' => $request->title,
                'image' => $filename,
                'date' => $request->date,
                'time' => $request->time,
                'description' => $request->description,
                'location' => $request->location,
                'category_id' => $request->category_id,
            ]);
        }

        return redirect("dashboard/category")->withSuccess('Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $categories = Category::all();
        return view('dashboard/category', compact('categories'))->with('success', 'Catégorie supprimé avec succès');
    }
}
