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
                <input type="text" name="txtnombre" id="txtnombre" class="form-control">
                <label for="">Apellido</label>
                <input type="text" name="txtapellido" id="txtapellido" class="form-control">
                <label for="">DPI</label>
                <input type="text" name="txtdpi" id="txtdpi" class="form-control">
                <label for="">NIT</label>
                <input type="text" name="txtnit" id="txtnit" class="form-control">
                <label for="">Fecha nacimiento</label>
                <input type="date" name="txtfecha_nacimiento" id="txtfecha_nacimiento" class="form-control">
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