@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Agenda - {{ $diary->employee->name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
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
						Aula : &nbsp;
					</span> 
					<span>
						{{ $diary->classroom->name }}
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
				<li class="list-group-item">
					<span class="strong">
						Inscripción : &nbsp;
					</span> 
					<span>
					@include('layouts.partials.errors')
					<form method="POST" action="{{ route('employee.diaries.update', $diary) }}" accept-charset="UTF-8" class="form-horizontal">
						{{ csrf_field() }}{{ method_field('PUT') }}
						<div class="margin-25">
							<select name="state" class="form-control" onchange="this.form.submit()">
	                    		<option value="1" {{ ( $diary->state ) == '1' ? 'selected' : '' }}>Abierta</option>
	                    		<option value="0" {{ ( $diary->state ) == '0' ? 'selected' : '' }}>Cerrada</option>
							</select>
						</div>
					</form>
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Eliminar Agenda : &nbsp;
					</span> 
					<span class="pull-right">
				      <form method="POST" 
				            action="{{ route('employee.diaries.destroy', $diary) }}" 
				            style="display: inline">

				      {{ csrf_field() }} {{ method_field('DELETE') }}

				        <button class="btn btn-xs btn-default" 
				                onclick="return confirm('Estás seguro de querer eliminar esta Agenda?')">
				          <i class="fa fa-times"></i>
				        </button>
				      </form>
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
				<div class="clearfix comments-section text-left"></div>
				<div class="col col-xs-12 col-md-6">
				<h4>Asistencia</h4>
				</div><!-- col  -->
				<div class="col col-xs-12 col-md-6">
				@include('layouts.partials.errors')
				<form method="POST" action="{{ route('employee.diaries.schedule', $schedule) }}" accept-charset="UTF-8" class="form-horizontal">
					{{ csrf_field() }}{{ method_field('PUT') }}
					<div class="col-xs-8 col-xs-offset-4">
						<select name="presence_of_the_student" class="form-control" onchange="this.form.submit()">
							<option value="">Sin confirmar</option>							
                    		<option value="yes" {{ ( $schedule->presence_of_the_student ) == 'yes' ? 'selected' : '' }}>Si</option>
                    		<option value="no" {{ ( $schedule->presence_of_the_student ) == 'no' ? 'selected' : '' }}>No</option>
						</select>
					</div>
				</form>
				</div><!-- col  -->
			</div><!-- container-fluid --> 
			@endforeach
			</div>
			<br>
			<a class="link" href="{{ url('employee/diaries') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
	</div><!-- /. panel-body --> 
@endsection

