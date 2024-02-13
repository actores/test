@extends('layout/template')

@section('title', 'Practica edit')

@section('contenido')

<main>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h2>Editar tarea</h2>



                @if($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


                <form action="{{ url('/tareas/'.$tarea->id) }}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$tarea->titulo}}">
                        <div id="emailHelp" class="form-text">Ingresa el título correspondiente para esta tarea</div>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control">{{$tarea->descripcion}}</textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="estado">
                            <option value="" {{ $tarea->estado == '' ? 'selected' : '' }}>Seleccione un estado</option>
                            <option value="Pendiente" {{ $tarea->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                            <option value="En curso" {{ $tarea->estado == 'En curso' ? 'selected' : '' }}>En curso</option>
                            <option value="Completado" {{ $tarea->estado == 'Completado' ? 'selected' : '' }}>Completado</option>
                        </select>
                    </div>

                    <a href="{{ url('/tareas') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

