@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Editar Sucursal - {{ $branch_office->name }}
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.branch-offices.update', $branch_office) }}" accept-charset="UTF-8" class="form-inline">
            {{ csrf_field() }}{{ method_field('PUT') }}
             <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">
                Nombre
            </label>
                <input class="form-control" 
                	   name="name" 
                	   type="text" 
                	   id="name" 
                	   value="{{ old('name', $branch_office->name ) }}">
            </div><!-- /. form-group -->
            <div class="form-group">
                <input class="btn btn-default" type="submit" value="Editar">
            </div><!-- /. form-group -->
        </form>
	</div>
</div><!-- /. panel-body --> 
@endsection