<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTrainingRequest;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.training.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.training.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrainingRequest $request)
    {
        $imageName = $request->image->store('Imgtraining');
        Training:: create([
            'titre'=> $request->titre,
            'description'=> $request->description,
            'lieu'=> $request->lieu,
            'image'=> $imageName

        ]);

        return redirect()->route('trainings')->with('sucess',' la formation a été ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        //
    }
}
