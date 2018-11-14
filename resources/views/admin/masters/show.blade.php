@extends('admin.base')

@section('content')


<h1>
   Datos
    <small>Sección uno</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('masters.index') }}"><i class="fa fa-dashboard"></i> Listado de Datos</a></li>
    <li class="active">Sección uno</li>
  </ol>

{{--  <div class="container">  --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Datos de la Sección uno
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $master->titulo }}</p>
                <p> <strong>Descripción</strong> {!! $master->nosotros !!}</p>
                <p> <strong>Descripción</strong> {!! $master->noso_titulo !!}</p>
                <p> <strong>Descripción</strong> {!! $master->noso_descri !!}</p>
                @if($master->banner)
                <img src="{{ $master->banner }}" class="foto_cliente">
                @endif
                </div>
            </div>
        </div>
    </div>
{{--  </div>     --}}
@endsection 