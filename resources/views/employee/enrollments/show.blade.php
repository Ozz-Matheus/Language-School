@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Matrícula - {{ $enrollment->name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Número de matrícula : &nbsp;
					</span>
				@if($enrollment->registration_number)
					<span>
						{{ $enrollment->registration_number }}
					</span>
				@else
					<span>
						Sin asignar
					</span>
				@endif
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Nombre : &nbsp;
					</span> 
					<span>
						{{ $enrollment->name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Edad : &nbsp;
					</span> 
					<span>
						{{ $enrollment->age }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					@if($enrollment->sex == 'male')
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
						{{ $enrollment->phone }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Télefono Movil : &nbsp;
					</span> 
					<span>
						{{ $enrollment->mobile_phone }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Nivel : &nbsp;
					</span>
				@if($enrollment->level)
					<span>
						{{ $enrollment->level->name }}
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
				@if($enrollment->branch_office)
					<span>
					{{ $enrollment->branch_office->name }}
					</span>
				@else
					<span>
						Sin asignar
					</span>
				@endif
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Folio del contrato : &nbsp;
					</span> 
					<span>
						{{ $enrollment->contract->order }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Titular del contrato : &nbsp;
					</span> 
					<span>
						{{ $enrollment->contract->name_of_holder }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $enrollment->created_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $enrollment->updated_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
			</ul> 
			<a class="link" href="{{ url('employee/enrollments') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
	</div><!-- /. panel-body --> 
@endsection

