@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Editar Estudiante - {{ $student->name }}
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.students.update', $student) }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">
                    Nombre
                </label>
                <div class="col-md-6">
                    <input class="form-control" 
                    	   name="name" 
                    	   type="text" 
                    	   id="name" 
                    	   value="{{ old('name', $student->name ) }}" required>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">
                    Correo Electronico
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="email" type="email" id="email" value="{{ old('email', $student->email) }}" required>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label class="col-md-4 control-label">&nbsp;</label>
                <div class="container-fluid text-center">
                    <hr class="col-md-12">
                    <p class="col-md-12">Dejar en blanco si no quieres cambiar la contraseña :</p>
                    <hr class="col-md-12">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Contraseña :</label>
                <div class="col-md-6">
                    <input type="password" name="password" class="form-control" placeholder="******">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="password_confirmation" class="col-md-4 control-label">Confirma la contraseña :</label>
                <div class="col-md-6">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="******">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-default" type="submit" value="Editar">
                </div>
            </div><!-- /. form-group -->
        </form>
	</div>
</div><!-- /. panel-body --> 
@endsection
