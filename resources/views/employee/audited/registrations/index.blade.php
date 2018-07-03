@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		<span>Registros de </span>
		<p>{{ $employee->name }}</p>
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="registration-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Folio</th>
				  <th>Creado</th>
				</tr>
			</thead>
			<tbody>
			@foreach($registrations as $registration)
				<tr>
				  <td>{{ $registration->full_name }}</td>
				  <td>{{ $registration->folio }}</td>
				  <td>{{ $registration->created_at->diffForHumans() }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<a class="link" href="{{ url('employee/audited') }}">
			<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
		</a>
	</div><!-- /. panel-body --> 
@endsection
