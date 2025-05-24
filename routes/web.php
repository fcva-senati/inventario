<?php

use App\Models\{Cliente,Categoria,Producto};
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Categoria\CategoriaController;
use App\Http\Controllers\Producto\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    //$cliente = new Cliente();

    /*$cliente = Cliente::create([
        'nombres' => 'Frank',
        'pri_ape' => 'Perez',
        'seg_ape' => 'Bustillos',
        'docu_tip' => 'M',
        'docu_num' => '74896521',
    ]);

    return $cliente->nombres." ".$cliente->pri_ape;*/

    /*$categoria = Categoria::create([
        'nombre' => 'HOGAR',
        'descripcion' => 'Categoria Hogar'
    ]);

    $categoria->productos()->create([
        'codigo' => '101',
        'nombre' => 'Mesa',
        'descripcion' => 'Hermosa mesa de buena calidad'
    ]);

    return $categoria;*/

    return view('welcome');
});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::post('/cliente/update', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::post('/cliente/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('/categorias/index', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias/update', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/categorias/delete/{id}', [CategoriaController::class, 'delete'])->name('categorias.delete');
Route::post('/categorias/destroy', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

Route::get('/productos/index', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos/store', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/edit/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/productos/update', [ProductoController::class, 'update'])->name('productos.update');
Route::get('/productos/delete/{id}', [ProductoController::class, 'delete'])->name('productos.delete');
Route::post('/productos/destroy', [ProductoController::class, 'destroy'])->name('productos.destroy');