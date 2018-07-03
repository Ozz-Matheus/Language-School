<?php

namespace App\Policies;

use App\Data;
use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class DataPolicy
{
    use HandlesAuthorization;

    public function before($employee)
    {

        if($employee->hasRole('Super'))
        {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Data      $model
     * @return mixed
     */
    public function view(Employee $employee, Data $data)
    {
        return $employee->id === $data->employee_id;
        
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Data  $model
     * @return mixed
     */
    public function delete(Employee $employee, Data $data)
    {
        return $employee->id === $data->employee_id;
    }
}