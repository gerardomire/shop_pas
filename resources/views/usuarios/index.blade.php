@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('Mensaje')){{
            Session::get('Mensaje')
        }}
        @endif

        <br>
        <h3>USUARIOS</h3>
        <br>
            <a href="{{url('usuarios/create')}}" class="btn btn-primary">Agregar Usuario</a>
        <br>
        <br>
        <table class="table table-wrapper table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$usuario->Nombre}}</td>
                    <td>{{$usuario->ApellidoPaterno}}</td>
                    <td>{{$usuario->ApellidoMaterno}}</td>
                    <td>{{$usuario->Correo}}</td>
                    <td>
                    <a href="{{url('/usuarios/'.$usuario->id.'/edit')}}" class="btn btn-success btn-sm">
                        Editar
                    </a>
                    <br><br>
                    <form action="{{url('/usuarios/'.$usuario->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button type="submit" onclick="return confirm('¿Estas seguro que deseas borrar al usuario?')"
                         class="btn btn-secondary btn-sm">Borrar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection