@extends('layout/pantilla')

@section('tituloPagina', 'Eliminar personal')

@section('contenido')

<br>
<div class="card">
    <h5 class="card-header"> ELIMINAR REGISTRO </h5>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro que quieres eliminar el resgitro
                <hr>
                <table class="table table-sm table-hover">
                    <thead>
                        
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DPI</th>
                        <th>NIT</th>
                        <th>Fecha Nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$personas->Nombre}}</td>
                            <td>{{$personas->Apellido}}</td>
                            <td>{{$personas->DPI}}</td>
                            <td>{{$personas->NIT}}</td>
                            <td>{{$personas->Fecha_nacimiento}}</td>
                        </tr>                        
                    </tbody>
                </table>
                <hr>
                <form action="{{ route("personas.destroy", $personas->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("personas.index") }}" class="btn btn-secondary">
                        <span><i class="bi bi-arrow-return-left"></i></span> regresar
                    </a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </p>
    </div>
</div>

@endsection