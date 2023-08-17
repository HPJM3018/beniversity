<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        return view("admin.departements.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        if($request->file('image')){
            $currentTime = now(); // Obtenir la date et l'heure actuelles
            $dateTimeString = $currentTime->format('Ymd_His'); // Convertir en chaîne au format "AnnéeMoisJour_HeureMinuteSeconde"
            $image_name = $dateTimeString . '.' . $request->file('image')->getClientOriginalExtension();
            $image_path = $request->file('image')->storeAs('images/departements', $image_name, 'public');

            Departement::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $image_path,
            ]);
        }
        
        //$image_path = $request->image->store("images/departements");

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
        return view("admin.departements.edit", compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        // Si une nouvelle image est envoyée
        if ($request->has("image")) {
            // On ajoute la règle de validation pour "picture"
            $resquest["image"] = 'required|mimes:jpg,png';
        }

        if($request->has('image')){
            Storage::delete($donation->image);
            $path_image = $request->image->store("images/departements");
        }

        $departement->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => isset($path_image) ? $path_image : $departement->image,      
        ]);

        return redirect("admin/departements")->with('success', 'Département mise à jour avec succèss');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        Storage::delete($departement->picture);
        $departement->delete();
        return redirect("admin/departements")->with('success', 'Departements supprimé avec succès');
    }
}
