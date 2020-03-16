@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
    <div class="card">
        <div class="card-header text-center">
            Modificar piso
        </div>
        <div class="card-body" style="padding:30px">
            <form method="POST" action="">
                @csrf
                {{method_field('PUT')}}

                <div class="form-group">
                    <label for="titulo">Título</label>
                <input type="text" name="titulo" value="{{$arrayPisos->titulo}}" id="titulo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="espacio">Espacio</label>
                    <input type="number" name="espacio" value="{{$arrayPisos->espacio}}" id="espacio" class="form-control">
                </div>

                <div class="form-group">
                    <label for="poblacion">Poblacion</label>
                    <input type="text" name="poblacion" value="{{$arrayPisos->poblacion}}" id="poblacion" class="form-control">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" value="{{$arrayPisos->descripcion}}" id="descripcion" class="form-control" rows="3"></input>
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" value="{{$arrayPisos->precio}}" id="precio" class="form-control">
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                <input type="text" name="foto" value="{{$arrayPisos->foto}}" id="foto" class="form-control">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar piso
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@stop
