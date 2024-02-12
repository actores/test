@extends('layout/template')

@section('title', 'Practica Home')

@section('contenido')

<main>
    <div class="container py-4">
        <header class="d-flex justify-content-between align-items-center">
            <h2>Listado de tareas</h2>

            <a href="{{ url('/tareas/create') }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg>
                Nueva Tarea
            </a>
        </header>
    </div>
</main>