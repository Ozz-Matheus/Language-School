@extends('layouts.app')
@section('content')
<div class="panel-heading">
    Registrar Aula
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.classrooms.store') }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">
                    Nombre
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="name" type="text" id="name" value="{{ old('name') }}" > 
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('branch_office_id') ? ' has-error' : '' }}">
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
            <div class="form-group {{ $errors->has('capacity') ? ' has-error' : '' }}">
                <label for="capacity" class="col-md-4 control-label">
                    Capacidad
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="capacity" type="text" id="capacity" value="{{ old('capacity') }}" > 
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