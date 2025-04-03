<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Contenido;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    //
    public function contenidosIndex()
    {
        $contenidos = Contenido::all();

        return view('contenidos.index', compact('contenidos'));
    }

    public function contenidosCreate()
    {
        $categorias = Categoria::orderBy('categoria', 'asc')->get();

        return view('contenidos.create', compact('categorias'));
    }

    public function contenidosStore(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:255',
            'categoria_id'=>'required',
            'archivo' => 'required|file|mimes:jpg,jpeg,png,pdf',
        ],[]);

        $categoria = Categoria::findOrFail($request->categoria_id);
        $categoriaLabel = $categoria->categoria.' - '.$categoria->opcion;

        $path = $request->archivo->store('uploads', 'public');

        $contenido = new Contenido();

        $contenido->nombre = $request->nombre;
        $contenido->categoria = $request->categoria_id;
        $contenido->categoria_label = $categoriaLabel;
        $contenido->archivo = $path;

        $contenido->save();

        return redirect()->route('contenidosIndex')->with('success', 'Documento registrado correctamente');

    }
}
