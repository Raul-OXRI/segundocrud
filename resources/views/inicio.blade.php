@extends('layout/pantilla')

 @section('tituloPagina', 'Crud con laravel 8')

 @section('contenido')

<div class="card mt-5">
    <h5 class="card-header"> CRUD CON LARAVEL</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>                    
                @endif
            </div>
        </div>
        <h5 class="card-tittle text-center"> listado de clientes</h5>
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-primary">
                <span><i class="bi bi-person-fill-add"></i></span> Agregar nuevo registro
            </a>
        </p>
        <table class="table table-sm table-bordered">
            <thead>
                <th></th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DPI</th>
                <th>NIT</th>
                <th>Fecha Nacimiento</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </thead>
            <tbody>
                @foreach ($datos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                     <td>{{ $item->Nombre }}</td>
                     <td>{{ $item->Apellido }}</td>
                     <td>{{ $item->DPI }}</td>
                     <td>{{ $item->NIT }}</td>
                     <td>{{ $item->Fecha_nacimiento }}</td>
                     <td>
                        <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                            <button class="btn btn-warning">
                                <span><i class="bi bi-pencil-square"></i></span>   
                            </button>
                         </form>
                     </td>

                     <td>
                        <form action="{{ route("personas.show", $item->id) }}" method="GET">
                            <button class="btn btn-danger">
                                <span><i class="bi bi-trash-fill"></i></span>   
                            </button>
                         </form>
                     </td>
                     
                     
                     
                     
                </tr>
                @endforeach
            </tbody>
    </div>
</div>
    
  
  @endsection