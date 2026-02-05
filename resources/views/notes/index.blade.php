{{-- @extends('layouts.app') {{-- Para traer una sola plantilla --}}

{{-- @section('title', 'Listado de notas') --}} {{-- Para tener un titulo personalizado por cada pagina --}}

{{-- @section('content')  --}}
<x-layout>
    <x-slot name="title">Listado de notas</x-slot>{{-- Crea el titulo personalizado --}}
        <main class="content">
            <div class="cards">
                @forelse ($notes as $note): 
                    <div class="card card-small">
                        <div class="card-body">
                            <h4>{{ $note->title }}</h4>

                            <p>
                                
                                {{ $note->content }}

                            </p>
                        </div>

                        <footer class="card-footer">
                            <a href="{{ $note->editUrl() }}"  class="action-link action-edit">
                                <i class="icon icon-pen"></i>
                            </a>
                            <a class="action-link action-delete">
                                <i class="icon icon-trash"></i>
                            </a>
                        </footer>
                    </div>
                @empty

                    <p>No hay notas para mostrar</p>

                @endforelse
            </div>
        </main>
</x-layout>
{{-- @endsection --}}