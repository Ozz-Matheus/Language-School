@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Aulas
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.classrooms.create') }}" 
	    			title="Registrar Aula" 
	    			class="btn btn-default">
	    			Registrar Aula
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="classroom-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Titulo</th>
				  <th>Capacidad</th>
				  <th>Sucursal</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($classrooms as $classroom)
				<tr>
				  <td>{{ $classroom->name }}</td>
				  <td>{{ $classroom->capacity }}</td>
				  <td>
				  @if($classroom->branch_office)
				  	<p>{{ $classroom->branch_office->name }}</p>
				  @else
				  	<p>Sin asignar</p>
				  @endif
				  </td>
				  <td>{{ $classroom->created_at->diffForHumans() }}</td>
				  <td>
				      <a href="{{ route('employee.classrooms.edit', $classroom) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST" 
				            action="{{ route('employee.classrooms.destroy', $classroom) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Aula?')">
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
