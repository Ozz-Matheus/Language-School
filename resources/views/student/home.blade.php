@extends('layouts.app')

@section('content')
<div class="panel-heading">
    <i class="fa fa-user" aria-hidden="true"></i> 
    <span>&nbsp;</span>
    <span>E4E PLATAFORM</span>
</div><!-- /. panel-heading --> 
<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <span class="strong">Bienvenid@ : </span> {{ Auth::user()->name }}.
    <br><br>
    Seleccione una opción del menú para iniciar.
</div><!-- /. panel-body --> 
@endsection