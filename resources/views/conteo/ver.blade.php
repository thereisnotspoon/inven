@extends('layouts.admin')

@section('content')
<div class="card">

  <header class="card-header">
    <p class="card-header-title">
      Detalles del Ítem
    </p>

  </header>

  <div class="card-content">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del Usuario:</strong>
            {{ $usuario->nombres}} {{ $usuario->apellidos}} {{ $usuario->cedula}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha:</strong>
            {{ $conteo->created_at}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numero de bienes contados:</strong>
            {{ $conteo->n_bienes}}
        </div>
    </div>





  </div>
</div>
@endsection