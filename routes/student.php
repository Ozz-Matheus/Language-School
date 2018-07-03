<?php

Route::get('/', function () {
    return redirect()->route('student.home');
});
Route::get('home', 'Student\StudentController@index')->name('home');
Route::get('/{student}/edit', 'Student\StudentController@edit')->name('edit');
Route::match(['put', 'patch'], '/student/{student}/','Student\StudentController@update')->name('update');
Route::get('/enrollment', 'Student\EnrollmentController@index')->name('enrollment');
Route::resource('/schedules','Student\ScheduleController', ['except' => 'edit']);
Route::get('/student_assessments', 'Student\Student_assessmentsController@index')->name('student_assessments');
