<?php

namespace App\Policies;

use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
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
     * @param  \App\Employee  $model
     * @return mixed
     */
    public function view(Employee $authEmployee, Employee $employee)
    {
        return $authEmployee->id === $employee->id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Employee  $employee
     * @return mixed
     */
    public function create(Employee $employee)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Employee  $model
     * @return mixed
     */
    public function update(Employee $authEmployee, Employee $employee)
    {
       return $authEmployee->id === $employee->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Employee  $model
     * @return mixed
     */
    public function delete(Employee $authEmployee, Employee $employee)
    {
       return $authEmployee->id === $employee->id;
    }
}
