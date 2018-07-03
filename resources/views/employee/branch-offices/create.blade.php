@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Registrar Sucursal
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.branch-offices.store') }}" accept-charset="UTF-8" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">
                    Nombre
                </label>
                <input class="form-control" name="name" type="text" id="name" value="{{ old('name') }}">
            </div><!-- /. form-group -->
            <div class="form-group">
                <input class="btn btn-default" type="submit" value="Registrar">
            </div><!-- /. form-group -->
        </form>
	</div>
</div><!-- /. panel-body --> 
@endsection


