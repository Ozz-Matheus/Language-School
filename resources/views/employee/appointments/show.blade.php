@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Cita - {{ $appointment->full_name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Nombre : &nbsp;
					</span> 
					<span>
						{{ $appointment->full_name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Fecha : &nbsp;
					</span> 
					<span>
						{{ $appointment->day }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Hora : &nbsp;
					</span> 
					<span>
						{{ $appointment->hour }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Lugar de la cita : &nbsp;
					</span> 
					<span>
						{{ $appointment->place }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $appointment->created_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $appointment->updated_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
			</ul> 
		</div>
		<!-- comentarios -->
		<div class="box">
			<div class="container-fluid">
				<div class="col-xs-12 comments-section">
					<div class="title">
						<h4>Seguimiento Para las Citas</h4>
					</div>
					<div class="box">
					@foreach ($explications as $explication)
					<div class="comment">
						<div class="comt-pic"></div>
						<div class="comt-author">
							<h4>{{ $explication->name }}</h4> 
							<span class="comt-date">{{ $explication->created_at->formatLocalized('%A %d %B %Y %r') }} </span>
							<div class="reply-button">.</div>
						</div>
						<div class="comt-txt">
							{!! $explication->content !!}
						</div>
					</div>
					@endforeach
					</div><!-- box -->
					<div class="clearfix"></div>
					<div class="comments-form">
						<div class="title">
							<h4>Comentarios</h4>	
						</div>
        				<form method="POST" action="{{ route('employee.explication.store') }}" accept-charset="UTF-8" class="form-horizontal">
             				{{ csrf_field() }}
							<div class="form-group">
								<textarea class="field" required="" name="content" cols="50" rows="10"></textarea>
							</div><!-- form-group -->
							<div class="form-group">
								<input class="field" required name="id" type="hidden" value="{{ $appointment->id}}">
								<input class="btn btn-primary" type="submit" value="COMENTAR">
							</div><!-- form-group -->
						</form>
					</div><!-- /. explication-form -->
				</div><!-- /. explications-section -->
			</div><!-- /. container-fluid -->
			<a class="link" href="{{ url('employee/appointments') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
		<!-- comentarios -->
	</div><!-- /. panel-body --> 
@endsection

