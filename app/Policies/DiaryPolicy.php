<?php

namespace App\Policies;

use App\Diary;
use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiaryPolicy
{
    use HandlesAuthorization;

    public function before($employee)
    {

        if($employee->hasRole(['Super','Admin']))
        {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Diary      $model
     * @return mixed
     */
    public function view(Employee $employee, Diary $diary)
    {
        return $employee->id === $diary->employee_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Diary  $model
     * @return mixed
     */
    public function update(Employee $employee, Diary $diary)
    {
       return $employee->id === $diary->employee_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Diary  $model
     * @return mixed
     */
    public function delete(Employee $employee, Diary $diary)
    {
       return $employee->id === $diary->employee_id;
    }
}