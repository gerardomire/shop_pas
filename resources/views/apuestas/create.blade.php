@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>FORMULARIO PARA CREACION DE APUESTAS</h3>

        <form action="{{url('/apuestas')}}" method="post" enctype="multipart/form-data"
        class="form-horizontal">
            
            {{csrf_field()}} <!--Token de seguridad-->

            <div class="form-group">
                <label for="Tipo_apuesta" class="control-label">{{'Tipo de apuesta'}}</label>
                <input type="int" name="Tipo_apuesta" class="form-control" id="Tipo_apuesta" value="">
            </div>      
            
            <div class="form-group">
                <label for="Id_usuario" class="control-label">{{'Usuario'}}</label>
                <input type="int" name="Id_usuario" class="form-control" id="Id_usuario" value="">
            <div>

            <div class="form-group">
                <label for="Id_partido" class="control-label">{{'Partido'}}</label>
                <input type="int" name="Id_partido" class="form-control" id="Id_partido" value="">
            <div>

            <div class="form-group">
                <label for="Apuesta" class="control-label">{{'Apuesta'}}</label>
                <input type="float" name="Apuesta" class="form-control" id="Apuesta" value="">
            <div>

            <div class="form-group">
                <label for="Momio" class="control-label">{{'Momio'}}</label>
                <input type="float" name="Momio" class="form-control" id="Momio" value="">
            <div>

            <div class="form-group">
                <label for="Gano" class="control-label">{{'Gano'}}</label>
                <input type="boolean" name="Gano" class="form-control" id="Gano" value="">
            <div>

            <br>

            <input type="submit" value="Agregar" class="btn btn-success">

            <a href="{{url('apuestas')}}" class="btn btn-primary">Regresar</a>
        </form>
@endsection