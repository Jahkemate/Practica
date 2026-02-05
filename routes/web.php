<?php
use App\Models\Note;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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

//////////////////////////////////////////////////////////////////
Route::get('/notas',function() {

    $notes = Note::all();

    return view('notes.index')->with('notes', $notes);

})->name('notes.index'); /* para darle un nombre a las ruta, para no estarlas cambiando manualmente. */ 

///////////////////////////////////////////////////////////////////
Route::get ('/notas/{id}', function($id) {
    return 'Detalle de la nota '.$id;
})->name('notes.view');

////////////////////////////////////////////////////////////////////
Route::get ('/notas/crear',function() {
    return view('notes.create');

})->name('notes.create');
/////////////////////////////////////////////////////////////////////
Route::post('/notas', function(){
    Note::create ([
        'title' => Request::input('title'),
        'content' => Request::input('content'),
    ]);


    return redirect()->route('notes.index');
})->name('notes.store');


/////////////////////////////////////////////////////////////////////
Route::get ('/notas/{id}/editar', function($id) {
   $note = DB::table('notes')-> find($id);

    return 'Editar nota:  ' .$note->title;
})->name('notes.edit');



