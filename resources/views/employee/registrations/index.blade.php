@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Registros
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="registration-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Folio</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($registrations as $registration)
				<tr>
				  <td>{{ $registration->full_name }}</td>
				  <td>{{ $registration->folio }}</td>
				  <td>{{ $registration->created_at->diffForHumans() }}</td>
				  <td>
		            <a href="{{ route('employee.registrations.show', $registration) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
		            @can('delete', $registration)
				      <form method="POST" 
				            action="{{ route('employee.registrations.destroy', $registration) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Registro?')">
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
