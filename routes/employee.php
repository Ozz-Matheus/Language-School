<?php

Route::get('/', function () {
    return redirect()->route('employee.dashboard');
});

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// DASHBOARD


Route::resource('/employees','EmployeeController');
// EMPLOYEE

Route::group(['middleware' => 'role:Super|Admin'],function () {

	Route::resource('/branch-offices','Branch_officeController', ['except' => 'show']);
	Route::resource('/job-positions','Job_positionController', ['except' => 'show']);

	// REPORTS
	Route::get('/report/employees', function () {
	    return \Excel::download(new App\Exports\EmployeesExport, 'employees.xlsx');
	})->name('report.employees');

});
// ADMINISTRACION / GERENCIA / COORDINACIÓN


Route::group(['middleware' => 'role:Super|Admin|Conta'], function () {

	Route::resource('/contracts','ContractController');
	Route::resource('/payments','PaymentController', ['except' => ['create','edit', 'update']]);
	Route::get('/payments/{id}/create',['uses' => 'PaymentController@create','as' => 'payments.create']);

	// REPORTS
	Route::get('/report/contracts', function () {
	    return \Excel::download(new App\Exports\ContractsExport, 'contracts.xlsx');
	})->name('report.contracts');
	Route::get('/report/payments/{id}', function () {
	    return \Excel::download(new App\Exports\PaymentsExport, 'payments.xlsx');
	})->name('report.payments');

});
// CONTADURIA


Route::group(['middleware' => 'role:Super|Admin|Merca'], function () {

	Route::get('/data',['uses' => 'DataController@index','as' => 'data.index']);
	Route::get('/data/{data}/show',['uses' => 'DataController@show','as' => 'data.show']);
	Route::delete('/data/{data}/destroy',['uses' => 'DataController@destroy','as' => 'data.destroy']);

	Route::post('/comment',['uses' => 'CommentController@store','as' => 'comment.store']);

	Route::get('/appointments',['uses' => 'AppointmentController@index','as' => 'appointments.index']);
	Route::get('/appointments/{appointment}/show',['uses' => 'AppointmentController@show','as' => 'appointments.show']);
	Route::delete('/appointments/{appointment}/destroy',['uses' => 'AppointmentController@destroy','as' => 'appointments.destroy']);

	Route::post('/explication',['uses' => 'ExplicationController@store','as' => 'explication.store']);


	Route::get('/registrations',['uses' => 'RegistrationController@index','as' => 'registrations.index']);
	Route::get('/registrations/{registration}/show',['uses' => 'RegistrationController@show','as' => 'registrations.show']);
	Route::delete('/registrations/{registration}/destroy',['uses' => 'RegistrationController@destroy','as' => 'registrations.destroy']);

	Route::get('/audited',['uses' => 'AuditedController@index','as' => 'audited.index']);
	Route::get('audited/{employee}/data', ['uses'=>'AuditedController@auditedData', 'as' => 'audited.data']);
	Route::get('audited/{employee}/appointments', ['uses'=>'AuditedController@auditedAppointment', 'as' => 'audited.appointments']);
	Route::get('audited/{employee}/registrations', ['uses'=>'AuditedController@auditedRegistration', 'as' => 'audited.registrations']);

});
// MERCADOTECNIA


Route::group(['middleware' => 'role:Super|Admin|Acade'], function () {

	Route::resource('/timetables','TimetableController', ['except' => 'show']);
	Route::resource('/classrooms','ClassroomController', ['except' => 'show']);
	Route::resource('/levels','LevelController', ['except' => 'show']);
	Route::resource('/topics','TopicController', ['except' => 'show']);
	Route::resource('/enrollments','EnrollmentController');
	// REPORTS
	Route::get('/report/enrollments', function () {
	    return \Excel::download(new App\Exports\EnrollmentsExport, 'enrollments.xlsx');
	})->name('report.enrollments');

	Route::resource('/students','StudentController', ['except' => 'show']);

});
// DIRECCION ACADEMICA 


Route::group(['middleware' => 'role:Super|Admin|Docen'], function () {

	Route::resource('/diaries','DiaryController', ['except' => 'edit']);
	Route::match(['put', 'patch'], '/diaries/schedules/{diary}',['uses' => 'DiaryController@schedule','as' => 'diaries.schedule']);
	Route::resource('/student_assessments','Student_assessmentsController', ['except' => ['edit', 'update']]);

});
// DOCENCIA


Route::group(['middleware' => 'role:Super|Admin|Recep'], function () {

	Route::get('all-appointments', ['uses'=>'AppointmentController@allAppointments', 'as' => 'all-appointments.index']);
	Route::get('all-appointments/{appointment}/show', ['uses'=>'AppointmentController@allAppointmentsShow', 'as' => 'all-appointments.show']);
	Route::resource('/schedules','ScheduleController', ['except' => 'edit']);

});
// RECEPCIÓN








