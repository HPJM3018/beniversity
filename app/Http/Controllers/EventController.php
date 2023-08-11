<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.events.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'requiredrequired|string|max:255',
            'picture' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'requiredrequired|string',
            'location' => 'requiredrequired|string|max:255',
        ]);

        if($request->file('picture')){
            $file = $request->file('picture');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/events'), $filename);
            
            Event::create([
                'title' => $request->title,
                'picture' => $filename,
                'date' => $request->date,
                'time' => $request->time,
                'description' => $request->description,
                'location' => $request->location,
            ]);
        }

        return redirect("admin/events")->with('success', 'Evenement créer avec succèss');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view("events.show", compact("event"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view("admin.event.edit", compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'picture' => 'required',
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
        Storage::delete($event->picture);
        $event->delete();
        return redirect("admin/events")->with('success', 'Evenement supprimé avec succès');
    }
}
