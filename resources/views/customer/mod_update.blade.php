@extends('layout/pantilla')

@section('tituloPagina', 'ACTUALIZAR CLIENTE')

@section('contenido')

<br>
<div class="card">
    <h5 class="card-header"> EDITAR REGSITRO </h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route("personas.update", $personas->id) }}" method="post">
                @csrf
                @method('put')
                <label for="">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" required value="{{$personas->Nombre}}">
                <label for="">Apellido</label>
                <input type="text" name="Apellido" id="Apellido" class="form-control" required value="{{$personas->Apellido}}">
                <label for="">DPI</label>
                <input type="text" name="DPI" id="DPI" class="form-control" required value="{{$personas->DPI}}">
                <label for="">NIT</label>
                <input type="text" name="NIT" id="NIT" class="form-control" required value="{{$personas->NIT}}">
                <label for="">Fecha nacimiento</label>
                <input type="date" name="Fecha_nacimiento" id="Fecha_nacimiento" class="form-control" required value="{{$personas->Fecha_nacimiento}}">
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-secondary">
                    <span><i class="bi bi-arrow-return-left"></i></span> regresar
                </a>
                <button class="btn btn-warning">actualizar</button>
                
            </form>
            
        </p>
    </div>
</div>

@endsection