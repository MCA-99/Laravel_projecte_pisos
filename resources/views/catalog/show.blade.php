@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-sm-4">         {{-- TODO: Imagen de la película --}}
        <img src="{{$arrayPisos->foto}}" style="height:450px; width: 100%;"/>
    </div>
    <div class="col-sm-8">         {{-- TODO: Datos de la película --}}
        <h1>{{$arrayPisos->titulo}}</h1>
        <h4>Espacio: {{$arrayPisos->espacio}} m²</h4>
        <h4>Poblacion: {{$arrayPisos->poblacion}}</h4>
        <h4>Precio: {{$arrayPisos->precio}}€</h4>
        <h6><b>Descripcion:</b> {{$arrayPisos->descripcion}}</h6>
        @if($arrayPisos->estado == true)
            <h6><b>Estado:</b> Piso actualmente en alquiler</h6>
            <button class="btn btn-danger">Devolver Piso</button>
        @else
            <h6><b>Estado: </b>Libre</h6>
            <button class="btn btn-primary">Alquilar Piso</button>
        @endif
        <a href="{{url('/catalog/edit', ['id' => $arrayPisos->id])}}"><button class="btn btn-warning">✎ Editar Piso</button></a>
        <a href="{{url('/catalog')}}"><button class="btn btn-light" src="">❰ Volver al listado</button></a>
    </div>
</div>
@stop
