<?php

namespace App\Http\Controllers;

use App\Models\Sacerdote;
use Illuminate\Http\Request;

class SacerdoteController extends Controller
{
    public function index()
    {
        return response()->json(Sacerdote::all());
    }

    public function store(Request $request)
    {
        $sacerdote = Sacerdote::create($request->all());
        return response()->json($sacerdote, 201);
    }

    public function show(Sacerdote $sacerdote)
    {
        return response()->json($sacerdote);
    }

    public function update(Request $request, Sacerdote $sacerdote)
    {
        $sacerdote->update($request->all());
        return response()->json($sacerdote);
    }

    public function destroy(Sacerdote $sacerdote)
    {
        $sacerdote->delete();
        return response()->json(null, 204);
    }
}
