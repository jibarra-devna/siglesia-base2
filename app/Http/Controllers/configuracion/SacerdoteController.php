<?php

namespace App\Http\Controllers\configuracion;

use App\Http\Controllers\Controller;
use App\Models\configuracion\Sacerdote;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SacerdoteController extends Controller
{
    public function index()
    {
        $sacerdotes = Sacerdote::all();
        return response()->json($sacerdotes);
        //return response()->json(Sacerdote::all());
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

    public function generatePdf($id)
    {
        $sacerdote = Sacerdote::findOrFail($id);

        // Carga la vista y genera el PDF
        $pdf = Pdf::loadView('pdf', compact('sacerdote'));

        // Envía el PDF al navegador para que lo muestre
        return $pdf->stream('sacerdote_' . $sacerdote->id_sacerdote . '.pdf', [
            'Attachment' => false  // Esto asegura que el PDF se muestre en lugar de descargarse
        ]);
    }
}
