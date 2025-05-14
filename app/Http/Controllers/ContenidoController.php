<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Contenido;
use Flasher\Toastr\Laravel\Facade\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $contenido->id_categoria = $categoria->id_categoria;
        $contenido->categoria = $request->categoria_id;
        $contenido->categoria_label = $categoriaLabel;
        $contenido->archivo = $path;

        $contenido->save();

        return redirect()->route('contenidosIndex')->with('success', 'Documento registrado correctamente');

    }

    public function detallesCategoria($id)
    {        
        // Consultamos todos los registros de la categoria
        $categoria = Contenido::where('id_categoria',$id)
                    ->orderBy('created_at','DESC')            
                    ->get();

        // Pasamos la vista con el arreglo
        return view('detallesCategoria', compact('categoria', 'id'));
    }

    public function descargar($id)
    {
        $contenido = Contenido::findOrFail($id);

        // Ruta relativa al disco 'public'
        $archivo = $contenido->archivo; // ej: uploads/mi_archivo.pdf

        // Verificar que el archivo exista en el disco 'public'
        if (Storage::disk('public')->exists($archivo)) {

            // Incrementar contador
            $contenido->increment('contador');

            // Descargar archivo
            return Storage::disk('public')->download($archivo);
        }

        // Archivo no encontrado
        return abort(404, 'Archivo no encontrado');
    }

    public function contenidosDelete($id)
    {
        $contenido = Contenido::findOrFail($id);

        // Eliminar archivo físicamente si existe
        if ($contenido->archivo && Storage::disk('public')->exists($contenido->archivo)) {
            Storage::disk('public')->delete($contenido->archivo);
        }

        // Eliminar el registro de la base de datos
        $contenido->delete();

        return redirect()->back()->with('success', 'Archivo eliminado correctamente.');
    }
}
