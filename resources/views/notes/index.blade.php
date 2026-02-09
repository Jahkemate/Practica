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

                            <form method="POST" action="{{ route('notes.destroy',$note) }}">
                                @method('DELETE')
                                @csrf


                                <button>Eliminar</button>
                            </form>

                        </div>

                        <footer class="card-footer">
                            <a href="{{ $note->editUrl() }}"  class="action-link action-edit">
                                <i class="icon icon-pen"></i>
                            </a>
                            <a href="{{ $note->destroyUrl() }}" class="action-link action-delete" onclick="event.preventDefault(); document.getElementById('delete-note-{{$note->id}}').submit();">
                                <i class="icon icon-trash"></i>
                            </a>
                             <form id="delete-note-{{$note->id}}" method="POST" action="{{ route('notes.destroy', $note) }}" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </footer>
                    </div>
                @empty

                    <p>No hay notas para mostrar</p>

                @endforelse
            </div>
        </main>
</x-layout>
{{-- @endsection --}}