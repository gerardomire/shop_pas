@extends('layouts.app')

@section('content')
    <div class="container">
    @if(Session::has('Mensaje')){{
            Session::get('Mensaje')
        }}
        @endif

        <br>
            <h3>Productos</h3>
        <br>
            <a href="{{url('productos/create')}}" class="btn btn-primary">Agregar Productos</a>
        <br>
        <br>
        <table class="table table-wrapper table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Foto</th>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>
                        <img src="{{ asset('storage').'/'.$producto->Foto}}" alt="" width="60">
                    </td>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>
                    <a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-success btn-sm">
                        Editar
                    </a>
                    |
                    <form action="{{url('/productos/'.$producto->id)}}" method="post" style="display:inline">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button type="submit" onclick="return confirm('¿Estas seguro que deseas borrar el producto?')"
                         class="btn btn-secondary btn-sm">Borrar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection