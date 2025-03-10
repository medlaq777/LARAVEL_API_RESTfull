<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index(){
        return Produit::all();
    }

    public function store(Request $request){
        $produit = Produit::create($request->all());
        return response()->json($produit, 201);
    }

    public function show($id){
        return Produit::findorfail($id);
    }

    public function update(Request $request, $id){
        $produit = Produit::findorfail($id);
        $produit->update($request->all());
        return response()->json($produit, 200);
    }

    public function destroy($id){
        Produit::destroy($id);
        return response()->json(null, 204);
    }
}
