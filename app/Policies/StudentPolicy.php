<?php

namespace App\Policies;

use App\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Student  $student
     * @param  \App\Student  $model
     * @return mixed
     */
    public function update(Student $authStudent, Student $student)
    {
       return $authStudent->id === $student->id;
    }

}
