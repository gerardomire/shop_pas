@extends('layouts.app')

@section('content')
    <div class="container" >

        <h3>Editar Producto</h3>

        <form action="{{url('/productos/'.$producto->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">

            {{csrf_field()}}
            {{method_field('PATCH')}}
            
            <div class="form-group">
                <label for="nombre" class="control-label">{{'Nombre del producto'}}</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{$producto->nombre}}">
            </div>      
            
            <div class="form-group">
                <label for="precio" class="control-label">{{'Precio'}}</label>
                <input type="float" name="precio" class="form-control" id="precio" value="{{$producto->precio}}">
            <div>

            <div class="form-group">
                <label for="cantidad" class="control-label">{{'Cantidad'}}</label>
                <input type="float" name="cantidad" class="form-control" id="cantidad" value="{{$producto->cantidad}}">
            <div>

            <div class="form-group">
                <label for="Foto" class="control-label">{{'Foto'}}</label>
                <img src="{{ asset('storage').'/'.$producto->Foto}}" alt="" width="60">
                <input type="file" name="Foto" id="Foto" class="form-control" value="{{$producto->Foto}}">
            </div>

            <input type="submit" value="Editar" class="btn btn-primary">

            <a href="{{url('productos')}}">Regresar</a>

        </form>
@endsection