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
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'date' => 'required|date|after:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        $path_image = $request->image->store("images/events");

        Event::create([
            'name' => $request->name,
            'image' => $path_image,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'description' => $request->description,
            'location' => $request->location,
        ]);

        return redirect("admin/events")->with('success', 'Evenement créé avec succèss');
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
        return view("admin.events.edit", compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        // Si une nouvelle image est envoyée
        if ($request->has("image")) {
            // On ajoute la règle de validation pour "picture"
            $resquest["image"] = 'required|mimes:jpg,png';
        }
        /*if ($validator->fails()) {
            return response()->json([
                'message' => 'la validation a échoué',
                'errors' => $validator->errors()
            ], 422);
        };*/

        if($request->has('image')){
            Storage::delete($donation->image);
            $path_image = $request->image->store("images/events");
        }

        $event->update([
            'name' => $request->name,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'description' => $request->description,
            'location' => $request->location,
            'image' => isset($path_image) ? $path_image : $event->image,       
        ]);

        return redirect("admin/events")->with('success', 'Evènement modifié avec succèss');

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
