<?php

namespace App\Policies;

use App\Appointment;
use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentPolicy
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
     * @param  \App\Appointment      $model
     * @return mixed
     */
    public function view(Employee $employee, Appointment $appointment)
    {
        return $employee->id === $appointment->employee_id;
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Appointment  $model
     * @return mixed
     */
    public function delete(Employee $employee, Appointment $appointment)
    {
       return $employee->id === $appointment->employee_id;
        //
    }
}