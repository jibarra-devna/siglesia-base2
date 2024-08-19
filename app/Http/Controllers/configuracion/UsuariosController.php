<?php

namespace App\Http\Controllers\configuracion;

use App\Http\Controllers\Controller;
use App\Models\configuracion\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
        //return response()->json(Sacerdote::all());
    }

    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all());
        return response()->json($usuario, 201);
    }

    public function show(Usuario $usuario)
    {
        return response()->json($usuario);
    }

    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(null, 204);
    }

    public function generatePdf($id)
    {
        $usuario = Usuario::findOrFail($id);

        // Carga la vista y genera el PDF
        $pdf = Pdf::loadView('pdf', compact('sacerdote'));

        // Envía el PDF al navegador para que lo muestre
        return $pdf->stream('sacerdote_' . $usuario->id_usuario . '.pdf', [
            'Attachment' => false  // Esto asegura que el PDF se muestre en lugar de descargarse
        ]);
    }
}
