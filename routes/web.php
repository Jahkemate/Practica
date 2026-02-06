<?php
use App\Models\Note;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\NoteController;
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

//Ruta para mostrar las notas
Route::get('/notas',[NoteController::class, 'index'])->name('notes.index'); /* para darle un nombre a las ruta, para no estarlas cambiando manualmente. */ 

//Ruta para mostrar el detalle de una nota
Route::get ('/notas/{id}',[NoteController::class, 'show'])->name('notes.view');

//Ruta para mostrar el formulario de creacion de notas
Route::get ('/notas/crear',[NoteController::class, 'create'])->name('notes.create');

//Ruta para guardar las notas
Route::post('/notas', [NoteController::class, 'store'])->name('notes.store');

//Ruta para mostrar el formulario de edicion de notas
Route::get ('/notas/{id}/editar',[NoteController::class, 'edit'])->name('notes.edit');



