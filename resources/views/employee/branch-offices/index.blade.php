@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Sucursales
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.branch-offices.create') }}" 
	    			title="Registrar Sucursal" 
	    			class="btn btn-default">
	    			Registrar Sucursal
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="branch_office-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Titulo</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($branch_offices as $branch_office)
				<tr>
				  <td>{{ $branch_office->name }}</td>
				  <td>{{ $branch_office->created_at->diffForHumans() }}</td>
				  <td>
				      <a href="{{ route('employee.branch-offices.edit', $branch_office) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST" 
				            action="{{ route('employee.branch-offices.destroy', $branch_office) }}" 
				            style="display: inline">
				      {{ csrf_field() }} {{ method_field('DELETE') }}
				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Sucursal?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
				  </td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection
