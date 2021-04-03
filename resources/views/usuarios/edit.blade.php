@extends('layouts.app')

@section('content')
    <div class="container" >

        <h3>EDITAR USUARIOS</h3>

        <form action="{{url('/usuarios/'.$usuario->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">

            {{csrf_field()}}
            {{method_field('PATCH')}}
            
            <div class="form-group">
                <label for="Nombre" class="control-label">{{'Nombre'}}</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{$usuario->Nombre}}">
            </div>

            <div class="form-group">
                <label for="ApellidoPaterno" class="control-label">{{'Apellio Paterno'}}</label>
                <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control" value="{{$usuario->ApellidoPaterno}}">
            </div>

            <div class="form-group">
                <label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
                <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control" value="{{$usuario->ApellidoMaterno}}">
            </div>

            <div class="form-group">
                <label for="Correo" class="control-label">{{'Correo'}}</label>
                <input type="email" name="Correo" id="Correo" class="form-control" value="{{$usuario->Correo}}">
            </div>

            <input type="submit" value="Editar" class="btn btn-primary">

            <a href="{{url('usuarios')}}" class="btn btn-success">Regresar</a>

        </form>
@endsection