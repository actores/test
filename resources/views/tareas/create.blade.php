@extends('layout/template')

@section('title', 'Practica create')

@section('contenido')

<main>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h2>Registrar de tarea</h2>
                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" aria-describedby="tituloTarea">
                        <div id="emailHelp" class="form-text">Ingresa el título correspondiente para esta tarea</div>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</main>