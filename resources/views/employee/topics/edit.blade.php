@extends('layouts.app')
@section('content')
<div class="panel-heading">
    Editar Tema - {{ $topic->name }}
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.topics.update', $topic) }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-group {{ $errors->has('level_id') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">
                    Nivel
                </label>
                <div class="col-md-6">
                    <select name="level_id" id="level_id" class="form-control">
                        <option value="">SELECCIONA EL NIVEL</option>
                    @foreach($levels as $level)
                        <option 
                            value="{{ $level->id }}"
                            {{ old('level_id', $topic->level_id ) == $level->id ? 'selected' : '' }} >
                            {{ $level->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">
                    Nombre
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="name" type="text" id="name" value="{{ old('name', $topic->name ) }}" > 
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