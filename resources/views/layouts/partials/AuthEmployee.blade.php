@if( Auth::guard('employee')->user()->hasRole(['Super','Admin']) )
<div class="title" role="button" data-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="admin">
  <p>Administrativo <span class="caret"></span></p>
</div>
<div class="collapse" id="admin">
	<a href="{{ url('employee/branch-offices') }}" class="{{ setActiveRoute('employee.branch-offices*') }}" >Sucursales</a>
	<a href="{{ url('employee/job-positions') }}" class="{{ setActiveRoute('employee.job-positions*') }}">Puestos</a>
</div>
@endif
@if( Auth::guard('employee')->user()->hasRole(['Super','Admin','Conta']))
<div class="title" role="button" data-toggle="collapse" href="#conta" aria-expanded="false" aria-controls="conta">
  <p>Contaduría <span class="caret"></span></p>
</div>
<div class="collapse" id="conta">
	<a href="{{ url('employee/contracts') }}" class="{{ setActiveRoute('employee.contracts*') }}">Contratos</a>
	<a href="{{ url('employee/payments') }}" class="{{ setActiveRoute('employee.payments*') }}">Pagos</a>
</div>
@endif
@if( Auth::guard('employee')->user()->hasRole(['Super','Admin','Merca']))
<div class="title" role="button" data-toggle="collapse" href="#merca" aria-expanded="false" aria-controls="merca">
  <p>Mercadotecnia <span class="caret"></span></p>
</div>
<div class="collapse" id="merca">
	<a href="{{ url('employee/data') }}" class="{{ setActiveRoute('employee.data*') }}">Datos</a>
	<a href="{{ url('employee/appointments') }}" class="{{ setActiveRoute('employee.appointments*') }}">Citas</a>
	<a href="{{ url('employee/registrations') }}" class="{{ setActiveRoute('employee.registrations*') }}">Registros</a>
	<a href="{{ url('employee/audited') }}" class="{{ setActiveRoute('employee.audited*') }}">Auditados</a>
</div>
@endif
@if( Auth::guard('employee')->user()->hasRole(['Super','Admin','Acade']))
<div class="title" role="button" data-toggle="collapse" href="#acade" aria-expanded="false" aria-controls="acade">
  <p>Académico <span class="caret"></span></p>
</div>
<div class="collapse" id="acade">
	<a href="{{ url('employee/timetables') }}" class="{{ setActiveRoute('employee.timetables*') }}">Horario</a>
	<a href="{{ url('employee/classrooms') }}" class="{{ setActiveRoute('employee.classrooms*') }}">Aulas</a>
	<a href="{{ url('employee/levels') }}" class="{{ setActiveRoute('employee.levels*') }}">Niveles</a>
	<a href="{{ url('employee/topics') }}" class="{{ setActiveRoute('employee.topics*') }}">Temas</a>
	<a href="{{ url('employee/enrollments') }}" class="{{ setActiveRoute('employee.enrollments*') }}">Matrículas</a>
	<a href="{{ url('employee/students') }}" class="{{ setActiveRoute('employee.students*') }}">Estudiantes</a>
</div>
@endif
@if( Auth::guard('employee')->user()->hasRole(['Super','Admin','Docen']))
<div class="title" role="button" data-toggle="collapse" href="#docen" aria-expanded="false" aria-controls="docen">
  <p>Docencia <span class="caret"></span></p>
</div>
<div class="collapse" id="docen">
	<a href="{{ url('employee/diaries') }}" class="{{ setActiveRoute('employee.diaries*') }}">Agenda</a>
	<a href="{{ url('employee/student_assessments') }}" class="{{ setActiveRoute('employee.student_assessments*') }}">Calificaciones</a>
</div>
@endif
@if( Auth::guard('employee')->user()->hasRole(['Super','Admin','Recep']))
<div class="title" role="button" data-toggle="collapse" href="#recep" aria-expanded="false" aria-controls="recep">
  <p>Recepción <span class="caret"></span></p>
</div>
<div class="collapse" id="recep">
@if( Auth::guard('employee')->user()->hasRole('Recep') )
	<a href="{{ url('employee/all-appointments') }}" class="{{ setActiveRoute('employee.all-appointments*') }}">Todas las Citas</a>
@endif
	<a href="{{ url('employee/schedules') }}" class="{{ setActiveRoute('employee.schedules*') }}">Agendar Clases</a>
</div>
@endif
<a href="{{ url('employee/employees') }}" class="{{ setActiveRoute('employee.employees*') }}" >Empleados</a>
<a href="{{ url('employee/logout') }}"
		onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" >
	<i class="fa fa-btn fa-sign-out"></i>
	Salir
</a>
<form id="logout-form" action="{{ url('employee/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>