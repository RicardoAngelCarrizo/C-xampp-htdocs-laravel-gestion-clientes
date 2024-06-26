@extends('app')

@section('content')
  <div class="row">
    
    <div class="mb-3 col-lg-6">
      <label for="nombre" class="form-label">Nombre</label>
      <span class="form-control bg-light" id="nombre">{{ $data->nombre }}</span>
    </div>
    <div class="mb-3 col-lg-6">
      <label for="apellido" class="form-label">Apellido</label>
      <span class="form-control bg-light" id="apellido">{{ $data->apellido }}</span>
    </div>    
    <div class="mb-3 col-lg-6">
      <label for="email" class="form-label">Email</label>
      <span class="form-control bg-light" id="email">{{ $data->email }}</span>
    </div>
    <div class="mb-3 col-lg-6">
      <label for="telefono" class="form-label">Telefono</label>
      <span class="form-control bg-light" id="telefono">{{ $data->telefono }}</span>
    </div>
    <div class="mb-3 col-lg-12">
      <label for="comentario" class="form-label">Comentario</label>
      <span class="form-control bg-light" id="comentario">{{ $data->comentario }}</span>
    </div>
  </div>
  <a href="{{ route('clientes.edit', $data->id) }}" class="btn btn-success" >Editar registro</a>
  <a href="{{ route('clientes.store') }}" class="btn btn-primary" >Volver a la lista</a>
@endsection