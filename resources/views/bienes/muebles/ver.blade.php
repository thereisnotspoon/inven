@extends('layouts.admin')

@section('content')
<div class="card">

  <header class="card-header">
    <p class="card-header-title">
      Detalle
    </p>
    <a class="card-header-icon" aria-label="more options" href="{{ route('muebles.index') }}">
        Atrás
    </a>
  </header>

  <div class="card-content">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del Bien:</strong>
            {{ $mueble->bien_control_administrativo->bien->nombre }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripción:</strong>
            {{ $mueble->bien_control_administrativo->bien->descripcion }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Código:</strong>
            {{ $mueble->bien_control_administrativo->bien->codigo_barras }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Periodo de Garantía:</strong>
            {{ $mueble->bien_control_administrativo->periodo_de_garantia }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Activo:</strong>
            {{ $mueble->is_baja ? '0': '1' }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ubicación:</strong>
            {{ $mueble->bien_control_administrativo->bien->ubicacion->nombre }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="{{asset('storage/'.$mueble->bien_control_administrativo->bien->acta_de_recepcion)}}" download>Descargar Acta</a>
    </div>

  </div>
</div>
@endsection
