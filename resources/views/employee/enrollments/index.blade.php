@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Matrículas
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.enrollments.create') }}" 
	    			title="Registrar Matrícula" 
	    			class="btn btn-default">
	    			Registrar Matrícula
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="enrollment-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Número de matrícula</th>
				  <th>Nombre del estudiante</th>
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
				  <td>
				  @if($enrollment->branch_office)
				  	{{ $enrollment->branch_office->name }}
				  @else
				  	Sin asignar</p>
				  @endif
				  </td>
				  <td>{{ $enrollment->created_at->diffForHumans() }}</td>
				  <td>
		            <a href="{{ route('employee.enrollments.show', $enrollment) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
				      <a href="{{ route('employee.enrollments.edit', $enrollment) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST" 
				            action="{{ route('employee.enrollments.destroy', $enrollment) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Matrícula?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	     <div class="pull-left">
	        <a href="{{ route('employee.report.enrollments') }}" class="btn btn-lg btn-default">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i>
	        </a>
	     </div>
	</div><!-- /. panel-body --> 
@endsection
