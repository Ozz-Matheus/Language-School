@extends('layouts.app')
@section('content')
<div class="panel-heading">
    Editar Matrícula - {{ $enrollment->name }}
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.enrollments.update', $enrollment ) }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-group  {{ $errors->has('registration_number') ? ' has-error' : '' }}">
                <label for="registration_number" class="col-md-4 control-label">
                    Número de matrícula
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="registration_number" type="text" id="registration_number" value="{{ old('registration_number', $enrollment->registration_number) }}" >
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">
                    Nombre
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="name" type="text" id="name" value="{{ old('name', $enrollment->name) }}" >
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                <label for="age" class="col-md-4 control-label">
                    Edad
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="age" type="text" id="age" value="{{ old('age', $enrollment->age) }}" >
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="sex" class="col-md-4 control-label">
                    Sexo
                </label>
                <div class="col-md-6">
                    <select class="form-control" id="sex" name="sex">
                   <option value="male" {{ old( 'sex', $enrollment->sex ) == 'male' ? 'selected' : '' }}>HOMBRE</option>
                    <option value="female" {{ old( 'sex', $enrollment->sex ) == 'female' ? 'selected' : '' }}>MUJER</option>
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="mobile_phone" class="col-md-4 control-label">
                    Télefono Movil
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="mobile_phone" type="text" id="mobile_phone" value="{{ old('mobile_phone', $enrollment->mobile_phone) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('level_id') ? ' has-error' : '' }}">
                <label for="level_id" class="col-md-4 control-label">
                    Nivel
                </label>
                <div class="col-md-6">
                   <select name="level_id" id="level_id" class="form-control">
                        <option value="">SELECCIONA EL NIVEL</option>
                    @foreach($levels as $level)
                        <option 
                            value="{{ $level->id }}"
                            {{ old('level_id', $enrollment->level_id) == $level->id ? 'selected' : '' }} >
                            {{ $level->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group --> 
            <div class="form-group {{ $errors->has('branch_office_id') ? ' has-error' : '' }}">
                <label for="branch_office_id" class="col-md-4 control-label">
                    Sucursal
                </label>
                <div class="col-md-6">
                    <select name="branch_office_id" id="branch_office_id" class="form-control">
                    <option value="">SELECCIONA UNA SUCURSAL</option>
                    @foreach($branch_offices as $branch_office)
                        <option 
                            value="{{ $branch_office->id }}"
                            {{ old('branch_office_id', $enrollment->branch_office_id) == $branch_office->id ? 'selected' : '' }} >
                            {{ $branch_office->name }}
                        </option>
                    @endforeach
                    </select>
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
