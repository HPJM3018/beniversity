<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::all();
        return view('admin.donations.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.donations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required',
            'goal' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        /*if ($validator->fails()) {
            return response()->json([
                'message' => 'la validation a échoué',
                'errors' => $validator->errors()
            ], 422);
        };*/

        if($request->file('image')){
            $currentTime = now(); // Obtenir la date et l'heure actuelles
            $dateTimeString = $currentTime->format('Ymd_His'); // Convertir en chaîne au format "AnnéeMoisJour_HeureMinuteSeconde"
            $image_name = $dateTimeString . '.' . $request->file('image')->getClientOriginalExtension();
            $image_path = $request->file('image')->storeAs('images/donations', $image_name, 'public');

            Donation::create([
                'name' => $request->name,
                'goal' => $request->goal,
                'description' => $request->description,
                'image' => $image_path,
            ]);
    
        }

        return redirect("admin/donations")->with('success', 'Don créer avec succèss');

    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        return view("donations.show", compact("donations"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        return view("admin.donations.edit", compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required',
            'goal' => 'required',
            'raised' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
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
            $path_image = $request->image->store("images/donations");
        }

        $donation->update([
            'name' => $request->name,
            'goal' => $request->date,
            'raised' => $request->time,
            'description' => $request->description,
            'image' => isset($path_image) ? $path_image : $donation->image,       
        ]);

        return redirect("admin/donations")->with('success', 'Don mise à jour avec succèss');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        Storage::delete($donation->picture);
        $donation->delete();
        return redirect("admin/donations")->with('success', 'Don supprimé avec succès');
    }
}
