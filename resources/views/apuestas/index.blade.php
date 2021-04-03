@extends('layouts.app')

@section('content')
    <div class="container">
    @if(Session::has('Mensaje')){{
            Session::get('Mensaje')
        }}
        @endif

        <br>
            <h3>Apuestas</h3>
        <br>
        
        <br>
        <table class="table table-wrapper table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Tipo apuesta</th>
                    <th>Usuario</th>
                    <th>Partido</th>
                    <th>Apuesta</th>
                    <th>Momio</th>
                    <th>Gano</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($apuestas as $apuesta)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$apuesta->Tipo_apuesta}}</td>
                    <td>{{$apuesta->Id_usuario}}</td>
                    <td>{{$apuesta->Id_partido}}</td>
                    <td>{{$apuesta->Apuesta}}</td>
                    <td>{{$apuesta->Momio}}</td>
                    <td>{{$apuesta->Gano}}</td>
                    <td>{{$apuesta->Total}}</td>
                    <td>
                    <a href="{{url('/apuestas/'.$apuesta->id.'/edit')}}" class="btn btn-success btn-sm">
                        Editar
                    </a>
                    |
                    <form action="{{url('/apuestas/'.$apuesta->id)}}" method="post" style="display:inline">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button type="submit" onclick="return confirm('¿Estas seguro que deseas borrar el equipo?')"
                         class="btn btn-secondary btn-sm">Borrar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection