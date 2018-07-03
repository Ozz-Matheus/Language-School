<a href="{{ route('student.schedules.index') }}" class="{{ setActiveRoute('student.schedules') }}">Agendar Clases</a>
<a href="{{ url('student/student_assessments') }}" class="{{ setActiveRoute('student.student_assessments') }}">Calificaciones</a>
<a href="{{ url('student/enrollment') }}" class="{{ setActiveRoute('student.enrollment') }}">Matrículas</a>
<a href="{{ route('student.edit', auth()->user() ) }}" class="{{ setActiveRoute('student.edit') }}">Perfil</a>
<a href="{{ url('student/logout') }}"
		onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" >
	<i class="fa fa-btn fa-sign-out"></i>
	Salir
</a>
<form id="logout-form" action="{{ url('student/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>