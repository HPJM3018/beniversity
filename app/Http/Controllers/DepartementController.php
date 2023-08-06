<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        return view('admin.departements.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.departements.edit");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required',
            'picture' => 'required|mimes:jpg,png',
        ]);

        /*if ($validator->fails()) {
            return response()->json([
                'message' => 'la validation a échoué',
                'errors' => $validator->errors()
            ], 422);
        };*/

        if($request->file('picture')){
            $file = $request->file('picture');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('departements'), $filename);

            Departement::create([
                'name' => $request->name,
                'description' => $request->description,
                'picture' => $filename,
            ]);
        }

        return redirect("admin/departements")->with('success', 'Département créer avec succèss');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        return view("departements.show", compact("departement"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        return view("admin.departements.edit", compact("departement"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required',
        ]);

        // Si une nouvelle image est envoyée
        if ($request->has("picture")) {
            // On ajoute la règle de validation pour "picture"
            $validator["picture"] = 'required|mimes:jpg,png';
        }
        /*if ($validator->fails()) {
            return response()->json([
                'message' => 'la validation a échoué',
                'errors' => $validator->errors()
            ], 422);
        };*/

        if($request->file('picture')){
            $file = $request->file('picture');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('departements'), $filename);

            Departement::create([
                'name' => $request->name,
                'description' => $request->description,
                'picture' => $filename,
            ]);
        }

        return redirect("departements/show")->with('success', 'Département mise à jour avec succèss');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        Storage::delete($departement->picture);
        $departement->delete();
        return view('admin/departements')->with('success', 'Departements supprimé avec succès');
    }
}
