{{-- @extends('layouts.app')

@section('title', 'Crear nueva nota') {{-- Para tener un titulo personalizado por cada pagina --}}

{{-- @include('layouts.header') {{-- Trae el header de la plantilla de Header (Layouts) --}}
{{-- @section('content') --}}

<x-layout>
    <x-slot name="title">Crear nueva nota</x-slot>{{-- Crea el titulo personalizado --}}
    <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1>Nueva nota</h1>
{{-- // Si hay errores en el formulario, se muestra un mensaje de error y una lista de los errores --}}                        @if($errors->any())
                            <div class="errors">
                                <p><strong>El formulario contiene errores, por favor corrígelos e intenta nuevamente:</strong></p>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('notes.store') }}" method="POST">
                            @csrf

                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" class="field-input @error('title') field-error @enderror">
                            
                             @error('title')
                                 <p class="error-message">{{ $message }}</p>
                             @enderror   

                            <label for="content" class="field-label">Contenido:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea @error('title') field-error @enderror"> {{old('content')}}</textarea>
                            
                            @error('content')
                                 <p class="error-message">{{ $message }}</p>
                             @enderror  
                            
                             <button type="submit" class="btn btn-primary">Crear nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
</x-layout>
{{-- @include('layouts.footer') {{-- Esto trae el footer desde la plantilla footer (Layouts) --}}
{{-- @endsection --}}
