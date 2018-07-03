@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Registrar Empleado
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.employees.store') }}" accept-charset="UTF-8" class="form-horizontal">
             {{ csrf_field() }}
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">
                    Nombre
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="name" type="text" id="name" value="{{ old('name') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">
                    Correo Electronico
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="email" type="email" id="email" value="{{ old('email') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">
                    Contraseña
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="password" type="password" id="password" value="{{ old('password') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="sex" class="col-md-4 control-label">
                    Sexo
                </label>
                <div class="col-md-6">
                <select class="form-control" id="sex" name="sex">
                    <option value="male" {{ old( 'sex' ) == 'male' ? 'selected' : '' }}>HOMBRE</option>
                    <option value="female" {{ old( 'sex' ) == 'female' ? 'selected' : '' }}>MUJER</option>
                </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="phone" class="col-md-4 control-label">
                    Télefono
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="mobile_phone" class="col-md-4 control-label">
                    Télefono Movil
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="mobile_phone" type="text" id="mobile_phone" value="{{ old('mobile_phone') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label class="col-md-4 control-label">
                    Puesto
                </label>
                <div class="col-md-6">
                    <select name="job_position_id" id="job_position_id" class="form-control">
                        <option value="">SELECCIONA UNA PUESTO</option>
                    @foreach($job_positions as $job_position)
                        <option 
                            value="{{ $job_position->id }}"
                            {{ old('job_position_id') == $job_position->id ? 'selected' : '' }} >
                            {{ $job_position->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label class="col-md-4 control-label">
                    Jefe Directo
                </label>
                <div class="col-md-6">
                    <select name="direct_boss" id="direct_boss" class="form-control">
                    <option value="">SELECCIONA UN JEFE DIRECTO</option>
                    @foreach($employees as $direct_boss)
                        <option 
                            value="{{ $direct_boss->id }}"
                            {{ old('direct_boss') == $direct_boss->id ? 'selected' : '' }} >
                            {{ $direct_boss->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label class="col-md-4 control-label">
                    Sucursal
                </label>
                <div class="col-md-6">
                    <select name="branch_office_id" id="branch_office_id" class="form-control">
                    <option value="">SELECCIONA UNA SUCURSAL</option>
                    @foreach($branch_offices as $branch_office)
                        <option 
                                value="{{ $branch_office->id }}"
                                {{ old('branch_office_id') == $branch_office->id ? 'selected' : '' }} >
                            {{ $branch_office->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-default" type="submit" value="Registrar">
                </div>
            </div>
        </form>
    </div>
</div><!-- /. panel-body --> 
@endsection