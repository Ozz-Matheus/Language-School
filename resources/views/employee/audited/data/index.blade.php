@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		<span>Datos de </span>
		<p>{{ $employee->name }}</p>
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="data-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Teléfono</th>
				  <th>Creado</th>
				</tr>
			</thead>
			<tbody>
			@foreach($datas as $data)
				<tr>
				  <td>{{ $data->full_name }}</td>
				  <td>{{ $data->phone }}</td>
				  <td>{{ $data->created_at->diffForHumans() }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<a class="link" href="{{ url('employee/audited') }}">
			<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
		</a>
	</div><!-- /. panel-body --> 
@endsection