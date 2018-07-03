<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Employee' => 'App\Policies\EmployeePolicy',
        'App\Data' => 'App\Policies\DataPolicy',
        'App\Appointment' => 'App\Policies\AppointmentPolicy', 
        'App\Registration' => 'App\Policies\RegistrationPolicy',
        'App\Diary' => 'App\Policies\DiaryPolicy',
        'App\Student' => 'App\Policies\StudentPolicy',
        'App\Schedule' => 'App\Policies\SchedulePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
