<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::get();
        return view('categorias.index',compact('categorias'));
    }
    public function create()
    {
        return view('categorias.create');
    }
    public function store(Request $request)
    {
        try {
            $libro = new Categoria();
            $libro->nombre = $request->nombre;
            $libro->save();
            return redirect()->route('categorias.index')->with('correcto','Categoria creada correctamente');
        }catch(\Exception $e){
            return redirect()->route('categorias.index')->with('error','Error al crear la categoria:');
        }
    }
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit',compact('categoria'));
    }
    public function update(Request $request, $id)
    {
        try {
            $categoria = Categoria::find($id);
            $categoria->nombre = $request->nombre;
            $categoria->save();
            return redirect()->route('categorias.index')->with('correcto','Categoria actualizada correctamente');
        }catch(\Exception $e){
            return redirect()->route('categorias.index')->with('error','Error al actualizar la categoria:');
        }
    }
    public function destroy($id)
    {
        try {
            $categoria = Categoria::find($id);
            $categoria->delete();
            return redirect()->route('categorias.index')->with('correcto','Categoria eliminada correctamente');
        }catch(\Exception $e){
            return redirect()->route('categorias.index')->with('error','Error al eliminar la categoria:');
        }
    }
}
