<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return 'Pagina de inicio';
});


Route::get('/notas',function() {

    $notes = [

            'Nota 1: Estudiar Laravel',
            'Nota 2: Estudiar Vue.js',
            'Nota 3: Estudiar React',
            'Nota 4: Estudiar Angular',
        
    ];
    return view('notes.index')->with('notes', $notes);
})->name('notes.index'); /* para darle un nombre a las ruta, para no estarlas cambiando manualmente. */ 

Route::get ('/notas/{id}/', function($id) {
    return 'Editar notas: '.$id;
})->name('notes.view');

Route::get ('/notas/crear',function() {
    return view('notes.create');
})->name('notes.create');

Route::get ('/notas/{id}/editar', function($id) {
    return 'Detalle de la nota '.$id;
});



