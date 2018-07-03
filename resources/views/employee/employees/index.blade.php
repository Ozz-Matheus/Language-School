@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Empleados
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		 @can('create', auth()->user())
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.employees.create') }}" 
	    			title="Registrar Empleado" 
	    			class="btn btn-default">
	    			Registrar Empleado
	    		</a>
	    	</div>
	    </div>
	    @endcan
		<hr>
		<table id="employee-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Puesto</th>
				  <th>Sucursal</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($employees as $employee)
				<tr>
				  <td>{{ $employee->name }}</td>
				  <td>
					@if($employee->job_position)
						<p>{{ $employee->job_position->name }}</p>
					@else
						<p>Sin asignar</p>
					@endif
					</td>
				  <td>
					@if($employee->branch_office)
						<p>{{ $employee->branch_office->name }}</p>
					@else
						<p>Sin asignar</p>
					@endif
				  </td>
				  <td>{{ $employee->created_at->diffForHumans() }}</td>
				  <td>
				  @can('view', $employee)
		            <a href="{{ route('employee.employees.show', $employee) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
		           @endcan
		           @can('update', $employee)
				      <a href="{{ route('employee.employees.edit', $employee) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				    @endcan
				     @can('delete', $employee)
				      <form method="POST" 
				            action="{{ route('employee.employees.destroy', $employee) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Empleado?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
				     @endcan
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	     @can('delete', auth()->user())
		     <div class="pull-left">
		        <a href="{{ route('employee.report.employees') }}" class="btn btn-lg btn-default">
					<i class="fa fa-file-excel-o" aria-hidden="true"></i>
		        </a>
		     </div>
	     @endcan
	</div><!-- /. panel-body --> 
@endsection