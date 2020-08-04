@extends('layouts.app')
@section('content')
<div class="panel-heading">
    Registrar una Agenda
</div><!-- /. panel-heading -->
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.diaries.store') }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('topic_id') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">
                    Temas
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
            <div class="form-group {{ $errors->has('classroom_id') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">
                    Aula
                </label>
                <div class="col-md-6">
                    <select name="classroom_id" id="topic_id" class="form-control">
                        <option value="">SELECCIONA UN AULA</option>
                   @foreach($classrooms as $classroom)
                        <option
                            value="{{ $classroom->id }}"
                            {{ old('classroom_id') == $classroom->id ? 'selected' : '' }} >
                            {{ $classroom->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                <label for="date" class="col-md-4 control-label">
                    Fecha
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="date" type="date" value="{{ old('date', $date) }}" id="date">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('time') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">
                    Hora
                </label>
                <div class="col-md-6">
                    <select name="time" id="time" class="form-control">
                        <option value="">SELECCIONA UNA HORA</option>
                    @foreach($timetables as $timetable)
                        <option
                            value="{{ $timetable->time }}"
                            {{ old('time') == $timetable->time? 'selected' : '' }} >
                            {{ setHour($timetable->time)}}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <input class="hide" required="" name="employee_id" type="hidden" value="{{ $employee? $employee->id : '' }}">
                    <input class="btn btn-default" type="submit" value="Registrar">
                </div>
            </div><!-- /. form-group -->
        </form>
    </div>
</div><!-- /. panel-body -->
@endsection
