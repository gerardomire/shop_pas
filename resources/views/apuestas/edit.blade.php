@extends('layouts.app')

@section('content')
    <div class="container" >

        <h3>EDITAR APUESTAS</h3>

        <form action="{{url('/apuestas/'.$apuesta->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">

            {{csrf_field()}}
            {{method_field('PATCH')}}
            
            <div class="form-group">
                <label for="Tipo_apuesta" class="control-label">{{'Tipo de apuesta'}}</label>
                <input type="int" name="Tipo_apuesta" class="form-control" id="Tipo_apuesta" value="{{$apuesta->Tipo_apuesta}}">
            </div>      
            
            <div class="form-group">
                <label for="Id_usuario" class="control-label">{{'Equipo visitante'}}</label>
                <input type="int" name="Id_usuario" class="form-control" id="Id_usuario" value="{{$apuesta->Id_usuario}}">
            <div>

            <div class="form-group">
                <label for="Id_partido" class="control-label">{{'Id Partido'}}</label>
                <input type="int" name="Id_partido" class="form-control" id="Id_partido" value="{{$apuesta->Id_partido}}">
            <div>

            <div class="form-group">
                <label for="Apuesta" class="control-label">{{'Apuesta'}}</label>
                <input type="text" name="Apuesta" class="form-control" id="Apuesta" value="{{$apuesta->Apuesta}}">
            </div>

            <div class="form-group">
                <label for="Momio" class="control-label">{{'Momio'}}</label>
                <input type="int" name="Momio" class="form-control" id="Momio" value="{{$apuesta->Momio}}">
            <div>
            <br>

            <input type="submit" value="Editar" class="btn btn-primary">

            <a href="{{url('usuarios')}}" class="btn btn-success">Regresar</a>

        </form>
@endsection