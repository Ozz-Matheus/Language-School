@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Datos
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="data-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Teléfono</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($datas as $data)
				<tr>
				  <td>{{ $data->full_name }}</td>
				  <td>{{ $data->phone }}</td>
				  <td>{{ $data->created_at->diffForHumans() }}</td>
				  <td>
		            <a href="{{ route('employee.data.show', $data) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
		            @can('delete', $data)
				      <form method="POST" 
				            action="{{ route('employee.data.destroy', $data) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Dato?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
				     @endcan
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection