@extends('adminlte::page')

@section('title', 'Editar cliente')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Editar Cliente </h2>
<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$cliente->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$cliente->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text" class="form-control" value="{{$cliente->correo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="text"  class="form-control" value="{{$cliente->documento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="ciudad" name="ciudad" type="text"  class="form-control" value="{{$cliente->ciudad}}">
  </div>
  <a href="/clientes" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop