@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Citas
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="appointment-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Fecha</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($appointments as $appointment)
				<tr>
				  <td>{{ $appointment->full_name }}</td>
				  <td>{{ $appointment->day }}</td>
				  <td>{{ $appointment->created_at->diffForHumans() }}</td>
				  <td>
		            <a href="{{ route('employee.appointments.show', $appointment) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
		            @can('delete', $appointment)
				      <form method="POST" 
				            action="{{ route('employee.appointments.destroy', $appointment) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Cita?')">
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
 