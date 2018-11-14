@extends('admin.base')

@section('content')


<h1>
    Productos
    <small>Todos los registros</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Datos de la Sección uno</a></li>
    <li class="active">Listado</li>
  </ol>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Datos Sección uno</h3>
      Productos
       @can('masters.create')
      <a href="{{ route('masters.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
      @endcan  
    </div>
    <!-- /.box-header -->
    <div class="box-body">
           
      <table id="productos_table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>TÍTULO</th>
          <th>NOSOTROS</th>
          <th>ACCIONES</th>
         
        </tr>
        </thead>
        <tbody>
            @foreach ($masters as $master )
            <tr>
                    <td>{{ $master->id }}</td>
                    <td>{{ $master->titulo }}</td>
                    <td>{!! $master->nosotros !!}</td>
                    
                    <td width="150px">
                        @can('masters.show')
                        <a href="{{ route('masters.show', $master->id) }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                        @endcan  
                        @can('masters.edit')
                        <a href="{{ route('masters.edit', $master->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                         @endcan

                         @can('masters.destroy')
                                    
                         {!! Form::open(['route'=>['masters.destroy', $master->id],
                         'method'=>'DELETE']) !!}
                         <button class="btn btn-xs btn-danger" style="margin: -22px 0 0 51px; position:absolute"><i class="fa fa-times"></i></button>
                         
                         {!! Form::close() !!}                               
                             
                         @endcan
                    </td>

                </tr>
            @endforeach
        
       
        
        </tbody>
        
      </table>
    </div>
    <!-- /.box-body -->
  </div>


@endsection

@section('scripts')

<script>
        $(function () {
          $('#productos_table').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
          })
        })
      </script>
@endsection


  