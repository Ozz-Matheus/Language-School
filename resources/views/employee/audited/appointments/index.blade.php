@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		<span>Citas de </span>
		<p>{{ $employee->name }}</p>
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="appointment-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Fecha</th>
				  <th>Creado</th>
				</tr>
			</thead>
			<tbody>
			@foreach($appointments as $appointment)
				<tr>
				  <td>{{ $appointment->full_name }}</td>
				  <td>{{ $appointment->day }}</td>
				  <td>{{ $appointment->created_at->diffForHumans() }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<a class="link" href="{{ url('employee/audited') }}">
			<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
		</a>
	</div><!-- /. panel-body --> 
@endsection
 