@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear EPS</h1>
@stop

@section('content')

<form action="/eps" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="eps" name="eps" type="text" class="form-control" tabindex="1">    
  </div>
  
  <a href="/eps" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop