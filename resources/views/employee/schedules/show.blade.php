@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Agendada
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Docente : &nbsp;
					</span> 
					<span>
						{{ $diary->employee->name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Fecha : &nbsp;
					</span> 
					<span>
						{{ $diary->date }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Hora : &nbsp;
					</span> 
					<span>
						{{ setHour($diary->time) }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Tema : &nbsp;
					</span> 
					<span>
						{{ $diary->topic->name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Sucursal : &nbsp;
					</span> 
					<span>
						{{ $diary->classroom->branch_office->name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Aula : &nbsp;
					</span> 
					<span>
						{{ $diary->classroom->name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Inscripción : &nbsp;
					</span> 
					<span>
						@if($diary->state == 1)
							<span>Abierta</span>
						@else
							<span>Cerrada</span>
						@endif
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $diary->created_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $diary->updated_at->diffForHumans() }}
					</span>
				</li><!-- /. list-group-item -->
			</ul> 
			<div class="container-fluid">
			@foreach ($schedules as $schedule)
			<div class="container-fluid line text-left">
				<div class="col col-xs-12 col-md-10">
					<h4>Número de matrícula - Nombre del Estudiante</h4>
					<p class="margin-25">
						#{{ $schedule->enrollment->registration_number }} - {{ $schedule->enrollment->name }}
					</p>
				</div><!-- col  -->
				<div class="col-xs-12 col-md-2">
			      <form method="POST" 
			            action="{{ route('employee.schedules.destroy', $schedule) }}" 
			            style="display: inline">

			      {{ csrf_field() }} {{ method_field('DELETE') }}

			        <button class="btn btn-xs btn-default" 
			                onclick="return confirm('Estás seguro de querer eliminar esta Clase?')">
			          <i class="fa fa-times"></i>
			        </button>
			      </form>
				</div><!-- col  -->
			@if( Auth::guard('employee')->user()->hasRole(['Super','Admin']) )
				<div class="clearfix comments-section text-left"></div>
				<div class="col col-xs-12 col-md-6">
				<h4>Calificación del Maestro</h4>
				</div><!-- col  -->
				<div class="col col-xs-12 col-md-6">
				@include('layouts.partials.errors')
				<form method="POST" action="{{ route('employee.schedules.update', $schedule) }}" accept-charset="UTF-8" class="form-horizontal">
					{{ csrf_field() }}{{ method_field('PUT') }}
					<div class="col-xs-8 col-xs-offset-4">
						<select name="teacher_appraisal" class="form-control" onchange="this.form.submit()">
							<option value="">Sin Evaluación</option>
                    		<option value="good" {{ ( $schedule->teacher_appraisal ) == 'good' ? 'selected' : '' }}>Bien</option>
                    		<option value="regular" {{ ( $schedule->teacher_appraisal ) == 'regular' ? 'selected' : '' }}>Regular</option>
                    		<option value="bad" {{ ( $schedule->teacher_appraisal ) == 'bad' ? 'selected' : '' }}>Mal</option>
						</select>
					</div>
				</form>
				</div><!-- col  -->
			@endif
			</div><!-- container-fluid --> 
			@endforeach
			</div>
			<br>
			<a class="link" href="{{ url('employee/schedules') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
	</div><!-- /. panel-body --> 
@endsection

