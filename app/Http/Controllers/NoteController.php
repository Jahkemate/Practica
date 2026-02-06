<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController 
{
//Metodo para mostrar las notas
    public function index() {
        //Obtener las notas de la base de datos
        $notes = Note::query()
            ->orderByDesc('id')
            ->get();

        //Retornar la vista con las notas
        return view('notes.index')->with('notes', $notes);
    }

//Metodo para mostrar el detalle de una nota
    public function show(int $id){
        return 'Detalle de la nota '.$id;
    }

//Metodo para mostrar el formulario de creacion de notas
    public function create() {
        return view('notes.create');
    }


    public function store(Request $request) {

//Validacion de los datos
    $request->validate([
        'title' => ['required', 'min:3', Rule::unique('notes')],
        'content' => 'required',
    ]);
//Guardar en la base de datos
    Note::create ([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ]);


    return to_route('notes.index');
    }

//Metodo para mostrar el formulario de edicion de notas
    public  function edit($id) {
//Obtener la nota de la base de datos
   $note = Note::findOrFail($id);
//Retornar la vista con la nota
    return view('notes.edit', ['note' => $note]); //Otra forma de pasar datos a la vista
}

public function update($id){
    dd('Updating: $id'); 
}

}