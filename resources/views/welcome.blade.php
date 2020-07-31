@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        <i class="fa fa-user" aria-hidden="true"></i>
        <span>&nbsp;</span>
        E4E PLATAFORM.
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <p>Inicia sesión para continuar...</p>
        </div>
        <hr>
        <div class="container-fluid">
            <div  class="flex-box row">
                <div class="box">
                    <div class="col-xs-6">
                        <a id="iconEmployee"  href="employee/login" title="Inicio de sesión para Empleados"></a>
                        <span class="span">Empleados</span>
                    </div>
                    <div class="col-xs-6">
                        <a id="iconStudent"  href="student/login" title="Inicio de sesión para Estudiantes"></a>
                        <span class="span">Estudiantes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
