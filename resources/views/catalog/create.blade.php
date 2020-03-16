@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Añadir piso
            </div>
            <div class="card-body" style="padding:30px">
                <form method="POST" action="">
                    @csrf
                    {{method_field('POST')}}

                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="espacio">Espacio</label>
                        <input type="number" name="espacio" id="espacio" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="poblacion">Poblacion</label>
                        <input type="text" name="poblacion" id="poblacion" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" name="precio" id="precio" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto (url)</label>
                        <input type="text" name="foto" id="foto" class="form-control">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Añadir piso
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@stop
