@extends('adminlte::page')

@section('title', 'Editar eps')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Editar Eps </h2>
<form action="/eps/{{$eps->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="eps" name="eps" type="text" class="form-control" value="{{$eps->eps}}">    
  </div>
  
  <a href="/eps" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop