@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($bien)

            <form action="/{{ $tipo_de_bien }}/{{ $id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="id_ubicacion">Ubicación</label>
                    <select class="form-control" id="id_ubicacion" name="id_ubicacion">
                        @foreach ($ubicaciones as $ubicacion)
                          @if ($ubicacion->id == $bien['id_ubicacion'])
                            <option value="{{$ubicacion->id}}" selected>{{$ubicacion->nombre}}</option>
                          @else
                            <option value="{{$ubicacion->id}}">{{$ubicacion->nombre}}</option>
                          @endif
                        @endforeach
                    </select>

                    <button type="button" class="btn btn-info">
                      <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                </div>

              <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $bien['nombre'] }}">
              </div>

              <div class="form-group">
                  <label for="clase">Clase</label>
                  <select class="form-control" id="clase" name="clase">
                      <option>CONTROL ADMINISTRATIVO</option>
                      <option>PROPIEDAD, PLANTA Y EQUIPO</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="codigo">Código</label>
                  <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $bien['codigo'] }}">
              </div>

              <div class="form-group">
                  <label for="id_usuario_final">Id Usuario Final</label>
                  <input type="text" class="form-control" id="id_usuario_final" name="id_usuario_final" value="{{ $bien['id_usuario_final'] }}">
              </div>

              <div class="form-group">
                  <label for="fecha_de_adquisicion">Fecha de Adquisición</label>
                  <input type="date" class="form-control" id="fecha_de_adquisicion" name="fecha_de_adquisicion" value="{{ $bien['fecha_de_adquisicion'] }}">
              </div>

              <div class="form-group">
                  <label for="acta_de_recepcion">Acta de Recepción</label>
                  <input type="file" class="form-control-file" id="acta_de_recepcion" name="acta_de_recepcion" value="{{ $bien['acta_de_recepcion'] }}">
              </div>

              <div class="form-group">
                  <label for="id_responsable">Id Responsable</label>
                  <input type="text" class="form-control" id="id_responsable" name="id_responsable" value="{{ $bien['id_responsable'] }}">
              </div>

              <div class="form-group">
                  <label for="periodo_de_garantia">Período de Garantía</label>
                  <input type="number" min="0" max="50"  step="1" class="form-control" id="periodo_de_garantia" name="periodo_de_garantia" value="{{ $bien['periodo_de_garantia'] }}">
              </div>

              <div class="form-group">
                  <label for="estado">Estado</label>
                  <select class="form-control" id="estado" name="estado" value="{{ $bien['estado'] }}">
                      <option>Bueno</option>
                      <option>Dañado</option>
                      <option>Regular</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="imagen">Imagen</label>
                  <input type="file" class="form-control-file" id="imagen" name="imagen" value="{{ $bien['imagen'] }}">
              </div>

              <div class="form-group">
                  <label for="observaciones">Observaciones</label>
                  <textarea class="form-control" rows='3' id="observaciones" name="observaciones">{{ $bien['observaciones'] }}</textarea>
              </div>

              <div class="form-group">
                  <label for="fecha_de_caducidad">Fecha de Caducidad</label>
                  <input type="date" class="form-control" id="fecha_de_caducidad" name="caducidad" value="{{ $bien['caducidad'] }}">
              </div>

              <div class="form-group">
                  <label for="peligrosidad">Peligrosidad</label>
                  <input type="text" class="form-control" id="peligrosidad" name="peligrosidad" value="{{ $bien['peligrosidad'] }}">
              </div>

              <div class="form-group">
                  <label for="manejo_especial">Manejo Especial</label>
                  <textarea class="form-control" rows='3' id="manejo_especial" name="manejo_especial">{{ $bien['manejo_especial'] }}</textarea>
              </div>

              <div class="form-group">
                  <label for="valor_unitario">Valor Unitario</label>
                  <input type="text" class="form-control" id="valor_unitario" name="valor" value="{{ $bien['valor'] }}">
              </div>

              <div class="form-group">
                  <label for="tiempo_de_vida_util">Tiempo de Vida Útil</label>
                  <input type="number" min="0" max="50"  step="1" class="form-control" id="tiempo_de_vida_util" name="vida_util" value="{{ $bien['vida_util'] }}">
              </div>

              <div class="form-group">
                  <label for="id_actividad">Id Actividad</label>
                  <input type="text" class="form-control" id="id_actividad" name="id_actividad" value="{{ $bien['id_actividad'] }}">
              </div>

              <div class="form-check">
                  <label class="form-check-label" for="en_uso">
                      <?php $valor = '' ?>
                      @if ($bien['en_uso'] == 1)
                        <?php $valor = 'checked'; ?>
                      @endif
                      <input type="checkbox" class="form-check-input" id="en_uso" name="en_uso" value="checked" {{$valor}}>En Uso
                  </label>
              </div>

              <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea class="form-control"  rows='3' id="descripcion" name="descripcion">{{ $bien['descripcion'] }}</textarea>
              </div>

                @includeIf('bienes.' . $tipo_de_bien . '.editar')

              <button type="submit" class="btn btn-primary">Guardar Cambios</button>

            </form>
            @endif

        </div>
    </div>
</div>
@endsection
