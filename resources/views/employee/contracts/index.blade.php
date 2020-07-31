@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Contratos
	</div><!-- /. panel-heading -->
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.contracts.create') }}"
	    			title="Registrar Contrato"
	    			class="btn btn-default">
	    			Registrar Contrato
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="contract-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Folio</th>
				  <th>Titular</th>
				  <th>Sucursal</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($contracts as $contract)
				<tr>
				  <td>{{ $contract->order }}</td>
				  <td>{{ $contract->name_of_holder }}</td>
				  <td>{{ $contract->branch_office ? $contract->branch_office->name : 'Sin asignar' }}</td>
				  <td>{{ $contract->created_at->diffForHumans() }}</td>
				  <td>
		            <a href="{{ route('employee.contracts.show', $contract) }}" class="btn btn-xs btn-default">
		              <i class="fa fa-eye"></i>
		            </a>
				      <a href="{{ route('employee.contracts.edit', $contract) }}"
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST"
				            action="{{ route('employee.contracts.destroy', $contract) }}"
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default"
				                onclick="return confirm('Estás seguro de querer eliminar esta Contrato?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	     <div class="pull-left">
	        <a href="{{ route('employee.report.contracts') }}" class="btn btn-lg btn-default">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i>
	        </a>
	     </div>
	</div><!-- /. panel-body -->
@endsection
