<?php

namespace App\Policies;

use App\Registration;
use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegistrationPolicy
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
     * @param  \App\Employee          $employee
     * @param  \App\Registration      $model
     * @return mixed
     */
    public function view(Employee $employee, Registration $registration)
    {
        return $employee->id === $registration->employee_id;
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Registration  $model
     * @return mixed
     */
    public function delete(Employee $employee, Registration $registration)
    {
       return $employee->id === $registration->employee_id;
        //
    }
}