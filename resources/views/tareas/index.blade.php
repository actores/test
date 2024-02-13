@extends('layout/template')

@section('title', 'Practica Home')

@section('contenido')


@if(session('msg'))
@section('scripts')
<script>
    Swal.fire({
        title: "{{ session('msg') }}",
        text: "Correctamente",
        icon: "success"
    });
</script>

@endsection
@endif
<div class="container py-4">
    <header class="d-flex justify-content-between align-items-center">
        <h2>Listado de tareas</h2>

        <a href="{{ url('/tareas/create') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
            Nueva Tarea
        </a>
    </header>
    <main>
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Estado</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tareas as $tarea)
                        <tr>
                            <th scope="row">{{$tarea->id}}</th>
                            <td>{{$tarea->titulo}}</td>
                            <td>{{$tarea->descripcion}}</td>
                            <td>{{$tarea->estado}}</td>

                            <td class="d-flex flex-row justify-content-center align-items-center gap-2">
                                <a href="{{ url('tareas/'.$tarea->id.'/edit') }}" class="btn btn-sm btn-success">Editar</a>
                                <form action="{{ url('tareas/'.$tarea->id) }}" method="POST" class="m-0">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</div>