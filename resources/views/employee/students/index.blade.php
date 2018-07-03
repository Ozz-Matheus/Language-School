@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Estudiantes
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.students.create') }}" 
	    			title="Registrar Estudiante" 
	    			class="btn btn-default">
	    			Registrar Estudiante
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="student-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Número de matrícula</th>
				  <th>Nombre</th>
				  <th>Correo</th>
				  <th>Sucursal</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($students as $student)
				<tr>
				  <td>{{ $student->enrollment->registration_number }}</td>
				  <td>{{ $student->enrollment->name }}</td>
				  <td>{{ $student->email }}</td>
				  <td>
				  @if($student->enrollment->branch_office)
				  	{{ $student->enrollment->branch_office->name }}
				  @else
				  	Sin asignar
				  @endif
				  </td>
				  <td>{{ $student->created_at->diffForHumans() }}</td>
				  <td>
				      <a href="{{ route('employee.students.edit', $student) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST" 
				            action="{{ route('employee.students.destroy', $student) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Estudiante?')">
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
