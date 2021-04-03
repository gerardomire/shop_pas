@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>FORMULARIO PARA CREACION DE USUARIOS</h3>

        <form action="{{url('/usuarios')}}" method="post" enctype="multipart/form-data"
        class="form-horizontal">
            
            {{csrf_field()}} <!--Token de seguridad-->

            <div class="form-group">
                <label for="Nombre" class="control-label">{{'Nombre'}}</label>
                <input type="text" name="Nombre" class="form-control" id="Nombre" value="">
            </div>      
            
            <div class="form-group">
                <label for="ApellidoPaterno" class="control-label">{{'Apellio Paterno'}}</label>
                <input type="text" name="ApellidoPaterno" class="form-control" id="ApellidoPaterno" value="">
            <div>

            <div class="form-group">
                <label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
                <input type="text" name="ApellidoMaterno" class="form-control" id="ApellidoMaterno" value="">
            <div>

            <div class="form-group">
                <label for="Correo" class="control-label">{{'Correo'}}</label>
                <input type="email" name="Correo" class="form-control" id="Correo" value="">
            </div>
            <br>
            <input type="submit" value="Agregar" class="btn btn-success">

            <a href="{{url('usuarios')}}" class="btn btn-primary">Regresar</a>
        </form>
@endsection