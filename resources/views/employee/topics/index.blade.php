@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Lista de Temas
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
	    <div class="container-fluid">
	    	<div class="text-right">
	    		<a href="{{ route('employee.topics.create') }}" 
	    			title="Registrar tema" 
	    			class="btn btn-default">
	    			Registrar tema
	    		</a>
	    	</div>
	    </div>
		<hr>
		<table id="topic-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Titulo</th>
				  <th>Nivel</th>
				  <th>Creado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($topics as $topic)
				<tr>
				  <td>{{ $topic->name }}</td>
				  <td>{{ $topic->level->name }}</td>
				  <td>{{ $topic->created_at->diffForHumans() }}</td>
				  <td>
				      <a href="{{ route('employee.topics.edit', $topic) }}" 
				      	 class="btn btn-xs btn-default">
				      	<i class="fa fa-pencil"></i>
				      </a>
				      <form method="POST" 
				            action="{{ route('employee.topics.destroy', $topic) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta tema?')">
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
