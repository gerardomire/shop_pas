@extends('layouts.app')

@section('content')
    <div class="container" >

        <h3>Vender</h3>

        <form action="{{url('/productos/vendido/'.$producto->id)}}" method="get" enctype="multipart/form-data" class="form-horizontal">

            {{csrf_field()}}
            
            
            <div class="form-group">
                <img src="{{ asset('storage').'/'.$producto->Foto}}" alt="" width="200">
            </div>

            <input type="submit" value="Vender" class="btn btn-primary">

            <a href="{{url('productos')}}">Regresar</a>

        </form>
@endsection