@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Empleado - {{ $employee->name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Nombre : &nbsp;
					</span> 
					<span>
						{{ $employee->name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Correo Electronico : &nbsp;
					</span> 
					<span>
						{{ $employee->email }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					@if($employee->sex == 'male')
						<span class="strong">
							Sexo : &nbsp;
						</span> 
						<span>
							Hombre
						</span>
					@else
						<span class="strong">
							Sexo : &nbsp;
						</span> 
						<span>
							Mujer
						</span>
					@endif
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Télefono : &nbsp;
					</span> 
					<span>
						{{ $employee->phone }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Télefono Movil : &nbsp;
					</span> 
					<span>
						{{ $employee->mobile_phone }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Puesto : &nbsp;
					</span>
				@if($employee->job_position)
					<span>
						{{ $employee->job_position->name }}
					</span>
				@else
					<span>
						Sin asignar
					</span>
				@endif
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Sucursal : &nbsp; 
					</span>
				@if($employee->branch_office)
					<span>
					{{ $employee->branch_office->name }}
					</span>
				@else
					<span>
						Sin asignar
					</span>
				@endif
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $employee->created_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $employee->updated_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Areas : &nbsp;
					</span> 
					@if($employee->getRoleDisplayNames())
					<span>
						{{ $employee->getRoleDisplayNames() }}
					</span>
					@else
						<span>
							Sin asignar
						</span>
					@endif
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Jefe Directo : &nbsp;
					</span> 
					@if($employee->direct_boss)
						<span>
						{{ $employee->getDirectBoss() }}
						</span>
					@else
						<span>
							Sin asignar
						</span>
					@endif
				</li><!-- /. list-group-item -->
			</ul> 
			<a class="link" href="{{ url('employee/employees') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
	</div><!-- /. panel-body --> 
@endsection

