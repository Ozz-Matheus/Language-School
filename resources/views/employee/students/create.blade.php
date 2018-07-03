@extends('layouts.app')
@section('content')
<div class="panel-heading">
    Registrar Estudiante
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.students.store') }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('enrollment_id') ? ' has-error' : '' }}">
                <label for="enrollment_id" class="col-md-4 control-label">
                    Nombre
                </label>
                <div class="col-md-6">
                    <select name="enrollment_id" id="enrollment_id" class="form-control">
                        <option value="">SELECCIONA UN ESTUDIANTE</option>
                    @foreach($enrollments as $enrollment)
                        <option 
                            value="{{ $enrollment->id }}"
                            {{ old('enrollment_id') == $enrollment->id ? 'selected' : '' }} >
                           #{{ $enrollment->registration_number }} - {{ $enrollment->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">
                    Correo Electronico
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="email" type="email" id="email" value="{{ old('email') }}" >
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">
                    Contraseña
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="password" type="password" id="password" value="{{ old('password') }}" >
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-default" type="submit" value="Registrar">
                </div>
            </div><!-- /. form-group -->
        </form>
	</div>
</div><!-- /. panel-body --> 
@endsection

