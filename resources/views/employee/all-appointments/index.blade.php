@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Todas las Citas
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
		            <a href="{{ route('employee.all-appointments.show', $appointment) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection
 