@extends('layouts.app')
@section('content')
    <div class="panel-heading">
        Clases Agendadas
    </div><!-- /. panel-heading --> 
    <div class="panel-body">
        <div class="container-fluid">
            <div class="text-right">
                <a href="{{ route('employee.schedules.create') }}" title="Agendar clase" class="btn btn-default">
                Agendar clase
                </a>
            </div>
        </div>
        <hr>
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div id='calendar'></div>
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
        themeSystem: 'jquery-ui',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        timeFormat: 'h(:mm)t',
        eventLimit: true, // allow "more" link when too many events
        events: [
        // Start
        @foreach ($dates as $date){
            id: {{ $date->Diary->id }},
            title: '. {{ $date->Diary->employee->name }} . {{ $date->Diary->classroom->name }}.',
            start: '{{ $date->Diary->date }}T{{ $date->Diary->time }}:00',
            url: '{{ route('employee.schedules.show', $date->Diary->id ) }}',
        },
        @endforeach// end 
        ]
    });
});
</script>
@endpush
