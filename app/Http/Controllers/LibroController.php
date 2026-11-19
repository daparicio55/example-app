<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;
use App\Models\Autore;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::get();
        return view('libros.index',compact('libros'));
    }
    public function create()
    {
        $categorias = Categoria::get();
        $autores = Autore::get();
        return view('libros.create',compact('categorias','autores'));
    }

    public function store(Request $request)
    {
        try {
            $libro = new Libro();
            $libro->titulo = $request->titulo;
            $libro->precio = $request->precio;
            $libro->codigo_sbn = $request->codigo_sbn;
            $libro->fecha_publicacion = $request->fecha_publicacion;
            $libro->categoria_id = $request->categoria_id;
            $libro->save();
            return redirect()->route('libros')->with('correcto','Libro creado correctamente');
        }catch(\Exception $e){
            return redirect()->route('libros')->with('error','Error al crear el libro:');
        }
    }

    public function edit($id)
    {
        $libro = Libro::find($id);
        return view('libros.edit',compact('libro'));
    }

    public function update(Request $request, $id)
    {
        try{
            $libro = Libro::find($id);
            $libro->titulo = $request->titulo;
            $libro->precio = $request->precio;
            $libro->codigo_sbn = $request->codigo_sbn;
            $libro->fecha_publicacion = $request->fecha_publicacion;
            $libro->save();
            return redirect()->route('libros')->with('correcto','Libro actualizado correctamente');
        }catch(\Exception $e){
            return redirect()->route('libros')->with('error','Error al actualizar el libro:');
        }  
    }

    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect()->route('libros')->with('correcto','Libro eliminado correctamente');
    }
}
