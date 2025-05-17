<?php

use App\Models\Cliente;
use App\Http\Controllers\Cliente\ClienteController;
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

    return view('welcome');
});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
