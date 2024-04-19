@extends('layout/pantilla')

@section('tituloPagina', 'AgregarCliente')

@section('contenido')


<div class="card mt-5">
    <h5 class="card-header"> CREAR USUARIO </h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route("personas.store") }}" method="post">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control">
                <label for="">Apellido</label>
                <input type="text" name="Apellido" id="Apellido" class="form-control">
                <label for="">DPI</label>
                <input type="text" name="DPI" id="DPI" class="form-control">
                <label for="">NIT</label>
                <input type="text" name="NIT" id="NIT" class="form-control">
                <label for="">Fecha nacimiento</label>
                <input type="date" name="Fecha_nacimiento" id="Fecha_nacimiento" class="form-control">
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-secondary">
                    <span><i class="bi bi-arrow-return-left"></i></span> regresar
                </a>
                <button class="btn btn-success">
                    Agregar
                </button>
            </form>
            
        </p>
    </div>
</div>

@endsection