@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Contratos a verificar
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="contract-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Folio</th>
				  <th>Titular</th>
				  <th>Valor total</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($contracts as $contract)
				<tr>
				  <td>{{ $contract->order }}</td>
				  <td>{{ $contract->name_of_holder }}</td>
				  <td>$ {{ $contract->total_cost }} MXN</td>
				  <td>{{ $contract->created_at->diffForHumans() }}</td>
				  <td>
		            <a href="{{ route('employee.payments.show', $contract) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection
