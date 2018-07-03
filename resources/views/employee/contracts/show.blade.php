@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Contrato - {{ $contract->name_of_holder }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Folio : &nbsp;
					</span> 
					<span>
						{{ $contract->order }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Fecha : &nbsp;
					</span> 
					<span>
						{{ $contract->date }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Nombre del titular : &nbsp;
					</span> 
					<span>
						{{ $contract->name_of_holder }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Edad del titular : &nbsp;
					</span> 
					<span>
						{{ $contract->age_of_the_holder }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Calle : &nbsp;
					</span> 
					<span>
						{{ $contract->street }}  
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Número : &nbsp;
					</span> 
					<span>
						{{ $contract->street_number }}  
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Colonia : &nbsp;
					</span> 
					<span>
						{{ $contract->colony }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Municipio : &nbsp;
					</span> 
					<span>
						{{ $contract->municipality }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Teléfono de casa : &nbsp;
					</span> 
					<span>
						{{ $contract->home_phone }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Teléfono móvil : &nbsp;
					</span> 
					<span>
						{{ $contract->mobile_phone }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Referencia : &nbsp;
					</span> 
					<span>
						{{ $contract->reference }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Parentesco : &nbsp;
					</span> 
					<span>
						{{ $contract->relationship_with_your_reference }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Teléfono de referencia : &nbsp;
					</span> 
					<span>
						{{ $contract->phone_your_reference }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Nombre de empresa : &nbsp;
					</span> 
					<span>
						{{ $contract->company_name }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Dirección de la empresa : &nbsp;
					</span> 
					<span>
						{{ $contract->company_address }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Cargo dentro de la compañía : &nbsp;
					</span> 
					<span>
						{{ $contract->job_position }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Teléfono de la empresa : &nbsp;
					</span> 
					<span>
						{{ $contract->company_phone }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Extensión de la empresa : &nbsp;
					</span> 
					<span>
						{{ $contract->extension_of_the_company }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Enganche : &nbsp;
					</span> 
					<span>
						$ {{ $contract->hitch }} MXN
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Mensualidades : &nbsp;
					</span> 
					<span>
						{{ $contract->monthly_payments }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Importe mensualidades : &nbsp;
					</span> 
					<span>
						$ {{ $contract->monthly_amount }} MXN
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Saldo : &nbsp;
					</span> 
					<span>
						$ {{ $contract->balance }} MXN
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Coste total : &nbsp;
					</span> 
					<span>
						${{ $contract->total_cost }} MXN 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Método de pago : &nbsp;
					</span> 
					<span>
						@if($contract->payment_method == 'cash')  <span> Efectivo. </span> @else  <span> Banco. </span> @endif 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Banco : &nbsp;
					</span> 
					<span>
						{{ $contract->bank }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Asesor : &nbsp;
					</span> 
					<span>
						@if($contract->employee)
							{{ $contract->employee->name }}  
						@else
							Sin asignar
						@endif
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Sucursal : &nbsp;
					</span> 
					<span>
						@if($contract->branch_office)
							{{ $contract->branch_office->name }}  
						@else
							Sin asignar
						@endif
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Sucursal : &nbsp;
					</span> 
					@if($contract->branch_office)
						<p>{{ $contract->branch_office->name }}</p>
					@else
						<p>Sin asignar</p>
					@endif
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $contract->created_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $contract->updated_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
			</ul> 
			<a class="link" href="{{ url('employee/contracts') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
	</div><!-- /. panel-body --> 
@endsection

