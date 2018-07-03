@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Horas
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.timetables.create') }}" 
	    			title="Registrar Hora" 
	    			class="btn btn-default">
	    			Registrar Hora
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="timetable-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Hora</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($timetables as $timetable)
				<tr>
				  <td>{{ setHour($timetable->time) }}</td>
				  <td>{{ $timetable->created_at->diffForHumans() }}</td>
				  <td>
				      <a href="{{ route('employee.timetables.edit', $timetable) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST" 
				            action="{{ route('employee.timetables.destroy', $timetable) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Hora?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection
