@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Registro - {{ $registration->full_name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Nombre : &nbsp;
					</span> 
					<span>
						{{ $registration->full_name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Cual es la hora de la cita de orientación : &nbsp;
					</span> 
					<span>
						{{ $registration->hour }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Plan de curso : &nbsp;
					</span> 
					<span>
						{{ $registration->course }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Método de pago : &nbsp;
					</span> 
					<span>
						{{ $registration->pay }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Folio : &nbsp;
					</span> 
					<span>
						{{ $registration->folio }} 
					</span>
				</li><!-- /. list-group-item -->	
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $registration->created_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $registration->updated_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
			</ul> 
			<a class="link" href="{{ url('employee/registrations') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
	</div><!-- /. panel-body --> 
@endsection

