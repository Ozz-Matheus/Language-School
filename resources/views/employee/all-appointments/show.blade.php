@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Cita - {{ $appointment->full_name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Nombre : &nbsp;
					</span> 
					<span>
						{{ $appointment->full_name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Fecha : &nbsp;
					</span> 
					<span>
						{{ $appointment->day }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Hora : &nbsp;
					</span> 
					<span>
						{{ $appointment->hour }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Lugar de la cita : &nbsp;
					</span> 
					<span>
						{{ $appointment->place }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $appointment->created_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $appointment->updated_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Cita creada por : &nbsp;
					</span> 
					<span>
						{{ $appointment->employee->name }}
					</span>
				</li><!-- /. list-group-item -->
			</ul> 
			<a class="link" href="{{ url('employee/all-appointments') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
	</div><!-- /. panel-body --> 
@endsection

