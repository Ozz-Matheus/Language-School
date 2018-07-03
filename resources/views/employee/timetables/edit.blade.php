@extends('layouts.app')
@section('content')
<div class="panel-heading">
    Editar Hora - {{ $timetable->time }}
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.timetables.update', $timetable) }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-group {{ $errors->has('time') ? ' has-error' : '' }}">
                <label for="time" class="col-md-4 control-label">
                    Horas
                </label>
                <div class="col-md-6">
                    <select name="time" id="time" class="form-control">
                        <option value="">SELECCIONA UNA HORA</option>
                    @foreach($hours as $hour)
                        <option 
                            value="{{ $hour->time }}"
                            {{ old('time', $timetable->time ) == $hour->time? 'selected' : '' }} >
                            {{ setHour($hour->time)}}
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