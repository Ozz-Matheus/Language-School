@extends('layouts.app')
@section('content')
    <div class="panel-heading">
    	Agendas
    </div><!-- /. panel-heading --> 
    <div class="panel-body">
        <div class="container-fluid">
        	<div class="text-right">
        		<a href="{{ route('employee.diaries.create') }}" title="Registrar una Agenda" class="btn btn-default">Registrar una Agenda</a>
        	</div>
        </div>
    	<hr>
    	<div class="search">
    		<div class="col-xs-12 col-md-10 col-md-offset-1">
    			<div id='calendar'></div>
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
        timeFormat: 'h(:mm)t',
        eventLimit: true, // allow "more" link when too many events
        events: [
        // Start
        @foreach ($dates as $date){
            id: {{ $date->id}},
            title: '. {{ $date->employee->name }}  . {{ $date->classroom->name }}.',
            start: '{{ $date->date }}T{{ $date->time }}:00',
            url: '{{ route('employee.diaries.show', $date->id) }}',
        },
        @endforeach// end 
        ]
    });
});
</script>
@endpush