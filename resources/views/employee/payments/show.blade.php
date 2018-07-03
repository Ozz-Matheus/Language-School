@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de abonos
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    @if($contract)
			<div class="text-right">
    		@if($contract->state == 1)
	    		<a href="{{ route('employee.payments.create', $contract) }}" 
	    			title="Registrar Abono" 
	    			class="btn btn-default">
	    			Registrar Abono 
	    		</a>
			@endif
	    	</div>
			<div class="text-left">
				<h4>Folio : <em>{{ $contract->order }}</em></h4> <br>
				<h4>Titular : <em>{{ $contract->name_of_holder }}</em></h4> <br>
				<h4>Costo total del contrato : <em> $ {{ $contract->total_cost }} MXN</em></h4> <br>
			@if($contract->state == 1)
				<h4>Saldo : <em> $ {{ $contract->total_cost - $totalPayment }} MXN</em></h4>
			@else
				<h4 class="text-danger">Pagado : <em> $ {{ $totalPayment }} MXN</em> / Estado : <em>CONTRATO LIQUIDADO</em></h4>
			@endif
			</div>
		@endif
	    </div>
		<hr>
		@if($payments)
		<table id="payment-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Folio</th>
				  <th>Nombre del Titular</th>
				  <th>Fecha del Abono</th>
				  <th>Valor del Abono</th>
				  <th>Fecha de registro</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
		@foreach ($payments as $payment)
				<tr>
				  <td>{{ $payment->contract->order }}</td>
				  <td>{{ $payment->contract->name_of_holder }}</td>
				  <td>{{ $payment->date_of_payment }}</td>
				  <td>$ {{ $payment->value_of_payment }} MXN</td>
				  <td>{{ $payment->created_at->diffForHumans() }}</td>
				  <td>
				      <form method="POST" 
				            action="{{ route('employee.payments.destroy', $payment) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Abono?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
				  </td>
				</tr>
		@endforeach
			</tbody>
		</table>
	     <div class="pull-left">
	        <a href="{{ route('employee.report.payments', $contract->id) }}" class="btn btn-lg btn-default">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i>
	        </a>
	     </div>
		@endif
	</div><!-- panel-body --> 
@endsection
