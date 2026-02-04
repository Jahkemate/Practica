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

                        <form action="">
                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" class="field-input">

                            <label for="content" class="field-label">Contenido:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea"></textarea>

                            <button type="submit" class="btn btn-primary">Crear nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
</x-layout>
{{-- @include('layouts.footer') {{-- Esto trae el footer desde la plantilla footer (Layouts) --}}
{{-- @endsection --}}
