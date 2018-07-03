@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Niveles
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.levels.create') }}" 
	    			title="Registrar Nivel" 
	    			class="btn btn-default">
	    			Registrar Nivel
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="level-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Titulo</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($levels as $level)
				<tr>
				  <td>{{ $level->name }}</td>
				  <td>{{ $level->created_at->diffForHumans() }}</td>
				  <td>
				      <a href="{{ route('employee.levels.edit', $level) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST" 
				            action="{{ route('employee.levels.destroy', $level) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Nivel?')">
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
