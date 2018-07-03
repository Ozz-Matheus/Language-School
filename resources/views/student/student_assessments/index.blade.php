@extends('layouts.app')
@section('content')
	<div class="panel-heading">
		Calificaciones de  {{  auth()->user()->name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<hr>
		<table id="student_assessment-table" class="table table-bordered table-striped">
			<thead>
				<tr>
				  <th>Tema</th>
				  <th>Califición</th>
				  <th>Fechas</th>
				  <th>Creado</th>
				</tr>
			</thead>
			<tbody>
			@foreach($student_assessments as $student_assessment)
				<tr>
				  <td>{{ $student_assessment->topic->name }}</td>
				  <td>{{ $student_assessment->qualification }}</td>
				  <td>
				  	<b>Fecha de inicio :</b> {{ $student_assessment->start_date }} <br /> 
				  	<b>Fecha de final :</b> {{ $student_assessment->end_date }} <br /> 
				  </td>
				  <td>{{ $student_assessment->created_at->diffForHumans() }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div><!-- /. panel-body --> 
@endsection
