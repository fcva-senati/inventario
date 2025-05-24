<?php

namespace App\Http\Controllers\Producto;

use App\Models\{Producto,Categoria};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request) {

        $productos = Producto::latest()->get();

        return view('productos.index', compact('productos'));
    }

    public function create() {

        $categorias = Categoria::get();

        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request) {

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index');
    }

    public function edit($id) {

        $producto = Producto::find($id);

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request) {

        $producto = Producto::find($request->id);

        $producto->update($request->except('id'));

        return redirect()->route('productos.index');
    }

    public function delete($id) {

        $producto = Producto::find($id);

        return view('productos.delete', compact('producto'));
    }

    public function destroy(Request $request) {

        $producto = Producto::find($request->id);

        $producto->delete();

        return redirect()->route('productos.index');
    }
}
