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
        $trainings= Training::all();
        return view('admin.training.index',compact('trainings'));
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
       // return view ('admin.training.show', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $training =Training::find($id);
        return view('admin.training.edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTrainingRequest $request, $id)
    {
        $training = Training::find($id);
        $arrayUpdate = [
            'titre'=>$request->titre,
            'lieu'=>$request->lieu,
            'description'=>$request->description,
        ];
        if($request->image != null){
            $imageName = $request->image->store('Imgtraining');
            $arrayUpdate = array_merge($arrayUpdate,
            [
                'image'=>$imageName
            ]);
        }
        $training->update($arrayUpdate);
        return redirect()->route('trainings')->with('sucess',' la formation a été modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $training = Training::find($id);
        $training->delete();
        return redirect()->route('trainings')->with('sucess',' la formation a été supprimer');
    }
}
