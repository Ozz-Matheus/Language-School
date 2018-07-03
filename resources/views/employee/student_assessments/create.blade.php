@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Calificar Estudiante
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.student_assessments.store') }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('enrollment_id') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">
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
            <div class="form-group {{ $errors->has('topic_id') ? ' has-error' : '' }}">
                <label for="topic_id" class="col-md-4 control-label">
                    Tema
                </label>
                <div class="col-md-6">
                    <select name="topic_id" id="topic_id" class="form-control">
                        <option value="">SELECCIONA UN TEMA</option>
                    @foreach($topics as $topic)
                        <option 
                            value="{{ $topic->id }}"
                            {{ old('topic_id') == $topic->id ? 'selected' : '' }} >
                            {{ $topic->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group --> 
            <div class="form-group">
                <label for="start_date" class="col-md-4 control-label">
                    Fecha de inicio
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="start_date" type="date" id="start_date" value="{{ old('start_date', $date) }}" required>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="end_date" class="col-md-4 control-label">
                    Fecha de final
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="end_date" type="date" id="end_date" value="{{ old('end_date', $date) }}" required>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="sex" class="col-md-4 control-label">
                    Calificación
                </label>
                <div class="col-md-6">
                    <select class="form-control" id="qualification" name="qualification">
                        <option value="OK" {{ old( 'qualification' ) == 'OK' ? 'selected' : '' }}>OK</option>
                        <option value="SM" {{ old( 'qualification' ) == 'SM' ? 'selected' : '' }}>SM</option>
                        <option value="SA" {{ old( 'qualification' ) == 'SA' ? 'selected' : '' }}>SA</option>
                    </select>
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
