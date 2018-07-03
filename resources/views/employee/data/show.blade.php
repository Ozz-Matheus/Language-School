@extends('layouts.app')
@section('content')
	<div class="panel-heading">
    	Dato - {{ $data->full_name }}
	</div><!-- /. panel-heading --> 
	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="strong">
						Nombre : &nbsp;
					</span> 
					<span>
						{{ $data->full_name }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Correo Electronico : &nbsp;
					</span> 
					<span>
						{{ $data->email }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Télefono : &nbsp;
					</span> 
					<span>
						{{ $data->phone }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Fecha de registro : &nbsp;
					</span> 
					<span>
						{{ $data->day }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Municipio : &nbsp;
					</span> 
					<span>
						{{ $data->municipality }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						¿Como te enteraste de nosotros? : &nbsp;
					</span> 
					<span>
						{{ $data->tell }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Referido : &nbsp;
					</span> 
					<span>
						{{ $data->referred }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Modulo : &nbsp;
					</span> 
					<span>
						{{ $data->module }} 
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Sucursal : &nbsp;
					</span> 
					<span>
						{{ $data->branch_office }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Creado : &nbsp;
					</span> 
					<span>
						{{ $data->created_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
				<li class="list-group-item">
					<span class="strong">
						Actualizado : &nbsp;
					</span> 
					<span>
						{{ $data->updated_at->formatLocalized('%A %d %B %Y %r')  }}
					</span>
				</li><!-- /. list-group-item -->
			</ul> 
		</div>
		<!-- comentarios -->
		<div class="box">
			<div class="container-fluid">
				<div class="col-xs-12 comments-section">
					<div class="title">
						<h4>Seguimiento.</h4>
					</div>
					<div class="box">
					@foreach ($comments as $comment)
					<div class="comment">
						<div class="comt-pic"></div>
						<div class="comt-author">
							<h4>{{ $comment->name }}</h4> 
							<span class="comt-date">{{ $comment->created_at->formatLocalized('%A %d %B %Y %r') }} </span>
							<div class="reply-button">.</div>
						</div>
						<div class="comt-txt">
							{!! $comment->content !!}
						</div>
					</div>
					@endforeach
					</div><!-- box -->
					<div class="clearfix"></div>
					<div class="comment-form">
						<div class="title">
							<h4>Comentarios</h4>	
						</div>
        				<form method="POST" action="{{ route('employee.comment.store') }}" accept-charset="UTF-8" class="form-horizontal">
             				{{ csrf_field() }}
							<div class="form-group">
								<textarea class="field" required="" name="content" cols="50" rows="10"></textarea>
							</div><!-- form-group -->
							<div class="form-group">
								<input class="field" required name="id" type="hidden" value="{{ $data->id }}">
								<input class="btn btn-primary" type="submit" value="COMENTAR">
							</div><!-- form-group -->
						</form>
					</div><!-- /. comment-form -->
				</div><!-- /. comments-section -->
			</div><!-- /. container-fluid -->
			<a class="link" href="{{ url('employee/data') }}">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; Atras
			</a>
		</div>
		<!-- comentarios -->
	</div><!-- /. panel-body --> 
@endsection

