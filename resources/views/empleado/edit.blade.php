@extends('adminlte::page')

@section('title', 'Editar empleado')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Editar Empleados </h2>
<form action="/empleados/{{$empleado->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$empleado->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$empleado->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text" class="form-control" value="{{$empleado->correo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" value="{{$empleado->telefono}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="text" class="form-control" value="{{$empleado->documento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sueldo</label>
    <input id="sueldo" name="sueldo" type="number" step="any" class="form-control" value="{{$empleado->sueldo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="ciudad" name="ciudad" type="text" class="form-control" value="{{$empleado->ciudad}}">
  </div>
  <a href="/empleados" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop