@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Crear Producto</h3>

        <form action="{{url('/productos')}}" method="post" enctype="multipart/form-data"
        class="form-horizontal">
            
            {{csrf_field()}} <!--Token de seguridad-->

            <div class="form-group">
                <label for="nombre" class="control-label">{{'Nombre del producto'}}</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="">
            </div>      
            
            <div class="form-group">
                <label for="precio" class="control-label">{{'Precio'}}</label>
                <input type="float" name="precio" class="form-control" id="precio" value="">
            <div>

            <div class="form-group">
                <label for="cantidad" class="control-label">{{'Cantidad'}}</label>
                <input type="float" name="cantidad" class="form-control" id="cantidad" value="">
            <div>

            <div class="form-group">
                <label for="Foto" class="control-label">{{'Foto'}}</label>
                <input type="file" name="Foto" class="form-control" id="Foto" value="">
            <div>

            <br>

            <input type="submit" value="Agregar" class="btn btn-success">

            <a href="{{url('productos')}}" class="btn btn-primary">Regresar</a>
        </form>
@endsection