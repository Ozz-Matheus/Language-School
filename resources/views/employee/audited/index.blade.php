@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Empleados a Auditar
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="employee-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Nombre</th>
				  <th>Puesto</th>
				  <th>Sucursal</th>
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
				  <td>
					<div class="dropdown dLabel">
						<button id="dLabel" type="button" class="btn btn-xs btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Ver más
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{ route('employee.audited.data', $employee) }}" title="Ver Datos" class="btn btn-link">
									Dato
								</a>
							</li>
							<li>
								<a href="{{ route('employee.audited.appointments', $employee) }}" title="Ver Citas" class="btn btn-link">
									Cita
								</a>
							</li>
							<li>
								<a href="{{ route('employee.audited.registrations', $employee) }}" title="Ver Matrículas" class="btn btn-link">
									Registros
								</a>
							</li>
						</ul>					
					</div>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection