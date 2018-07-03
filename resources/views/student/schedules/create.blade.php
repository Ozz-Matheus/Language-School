@extends('layouts.app')
@section('content')
    <div class="panel-heading">
        Agenda para estudiantes
    </div><!-- /. panel-heading --> 
    <div class="panel-body">
        <div class="search">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div id='calendar'></div>
            </div>
        </div>
        <div class="clearfix line"></div>
        <div class="container-fluid">
            <div class="col-md-6 col-md-offset-3">
                @include('layouts.partials.errors')
                <form method="POST" action="{{ route('student.schedules.store') }}" accept-charset="UTF-8" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group margin-25">
                        <label class="control-label">
                            <p>Seleccione una clase</p>
                        </label>
                    </div><!-- /. form-group -->
                    <div class="form-group">
                        <label id="text" class="line col-xs-12">
                        </label>
                    </div><!-- /. form-group -->
                    <div class="form-group">
                        <input id="diary" class="hide" required="" readonly="" name="diary_id" type="hidden"> 
                        <input id="enrollment_id" class="hide" required="" readonly="" name="enrollment_id" type="hidden" value="{{ $enrollment_id }}"> 
                        <input class="btn btn-default" type="submit" value="Agendar">
                    </div><!-- /. form-group -->
                </form> 
            </div>
        </div>
    </div><!-- /. panel-body --> 
@endsection
@push('styles')
<link href="{{ asset('stylesheets/fullcalendar.css') }}" rel='stylesheet' />
<link href="{{ asset('stylesheets/fullcalendar.print.css') }}" rel='stylesheet' media='print' />
<style type="text/css"> .active h4, .active p{ color: #3a87ad; font-weight: 600; } </style>
@endpush
@push('scripts')
<script src="{{ asset('scripts/lib/moment.min.js') }}"></script>
<script src="{{ asset('scripts/fullcalendar.min.js') }}"></script>
<script src="{{ asset('scripts/lib/es.js') }}"></script>
<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        selectable: true,
        selectHelper: true,
        eventClick: function(event) {
            w = event.estado;
            x = event.id;
            y = event.title;
            z = event.start.format('h a');
            $('#calendar a.fc-day-grid-event').click(function(){
                if(w == 'Cerrada'){
                    $('#text').text('Inscripción : '+ w).removeClass('alert-success').addClass('alert-danger');
                }else{
                    $('#text').text('Clase : '+ z + y).removeClass('alert-danger').addClass('alert-success'); 
                }
                $('#diary').val(x);
            });
        },
        timeFormat: 'h(:mm)t',
        eventLimit: true, // allow "more" link when too many events
        events: [
        // Start
        @foreach ($dates as $date){
            id: {{ $date->id}},
            title: '. {{ $date->employee->name }} . {{ $date->classroom->name }}.', 
            start: '{{ $date->date }}T{{ $date->time }}:00',
            estado: '{{ $date->state == 1 ? "Abierta" : "Cerrada" }}',
        },
        @endforeach// end 
        ]
    });
});
</script>
@endpush
