{{-- @extends('layouts.app')

@section('title', 'Crear nueva nota') {{-- Para tener un titulo personalizado por cada pagina --}}

{{-- @include('layouts.header') {{-- Trae el header de la plantilla de Header (Layouts) --}}
{{-- @section('content') --}}

<x-layout>
    <x-slot name="title">Editar nota</x-slot>{{-- Crea el titulo personalizado --}}
    <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1>Editar notas</h1>

                        @if ($errors->any())
                            <p class="error-message"><strong>Hay errores en el
                             formulario, porfavor corrigelos e intenta nuevamente.</strong></p>
                        
                        @endif

                        <form action="{{ route('notes.update', ['id' => $note->id]) }}" method="POST"> {{-- Ruta para actualizar la nota --}}
                            @csrf
                            @method('PUT') {{-- Metodo para actualizar la nota --}}

                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}" class="field-input @error('title') field-error @enderror"> 
                            
                             @error('title')
                                 <p class="error-message">{{ $message }}</p>
                             @enderror   

                            <label for="content" class="field-label">Contenido:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea @error('title') field-error @enderror"> {{old('content', $note->content)}}</textarea>
                            
                            @error('content')
                                 <p class="error-message">{{ $message }}</p>
                             @enderror  
                            
                             <button type="submit" class="btn btn-primary">Actualizar nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
</x-layout>
{{-- @include('layouts.footer') {{-- Esto trae el footer desde la plantilla footer (Layouts) --}}
{{-- @endsection --}}
