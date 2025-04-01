<?php

namespace App\Http\Controllers;

use App\Models\Goodie;
use Illuminate\Http\Request;

class GoodieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Goodie::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $goodie = Goodie::create($request->all());
        return response()->json($goodie, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $goodie = Goodie::find($id);  // Recherche le goodie par ID
        if (!$goodie) {
            return response()->json(['message' => 'Goodie not found'], 404);  // Si le goodie n'est pas trouvé
        }
        return response()->json($goodie);  // Renvoie le goodie trouvé
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Goodie $goodie)
    {
        $goodie->update($request->all());
        return response()->json($goodie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goodie $goodie)
    {
        $goodie->delete();
        return response()->json(null, 204);
    }
}
