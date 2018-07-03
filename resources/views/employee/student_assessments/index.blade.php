@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Estudiantes a Calificar
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.student_assessments.create') }}" 
	    			title="Calificar Estudiantes" 
	    			class="btn btn-default">
	    			Calificar Estudiantes
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="enrollment-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Número de matrícula</th>
				  <th>Nombre del estudiante</th>
				  <th>Nivel</th>
				  <th>Sucursal</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($enrollments as $enrollment)
				<tr>
				  <td>{{ $enrollment->registration_number }}</td>
				  <td>{{ $enrollment->name }}</td>
				  <td>{{ $enrollment->level->name }}</td>
				  <td>
				  @if($enrollment->branch_office)
				  	{{ $enrollment->branch_office->name }}
				  @else
				  	Sin asignar</p>
				  @endif
				  </td>
				  <td>{{ $enrollment->created_at->diffForHumans() }}</td>
				  <td>
		            <a href="{{ route('employee.student_assessments.show', $enrollment) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection
