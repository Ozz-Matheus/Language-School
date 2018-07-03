@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Editar Puesto - {{ $job_position->name }}
</div>
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.job-positions.update', $job_position) }}" accept-charset="UTF-8" class="form-inline">
            {{ csrf_field() }}{{ method_field('PUT') }}
             <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">
                    Nombre
                </label>
                <input class="form-control" 
                	   name="name" 
                	   type="text" 
                	   id="name" 
                	   value="{{ old('name', $job_position->name ) }}" >
            </div><!-- /. form-group -->
            <div class="form-group">
                <input class="btn btn-default" type="submit" value="Editar">
            </div><!-- /. form-group -->
        </form>
	</div>
</div>
@endsection