<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

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
            'title' => 'required|string|max:255',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'summary' => 'required',
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
                'title' => $request->name,
                'date' => $request->date,
                'time' => $request->time,
                'summary' => $request->summary,
                'description' => $request->description,
                'picture' => $filename,
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
        //
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
