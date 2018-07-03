<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use App\Notifications\EmployeeResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'sex', 'phone', 'mobile_phone', 'job_position_id', 'branch_office_id', 'direct_boss',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new EmployeeResetPassword($token));
    }
    public function job_position()
    {
        return $this->belongsTo('App\Job_position');
    }
    public function branch_office()
    {
        return $this->belongsTo('App\Branch_office');
    }
    public function scopeAllowed($query)
    {
        if( auth()->user()->can('view', $this) )
        {
            return $query;
        }
        
        return $query->where('id', auth()->id());
    }
    public function scopeAudited($query)
    {

        if( auth()->user()->hasRole(['Super','Admin']))   
        {
            return $query;
        }
        
        return $query->where('direct_boss', auth()->id());
    }
    public function getRoleDisplayNames()
    {
        return $this->roles->pluck('display_name')->implode(', ');
    }
    public function getDirectBoss()
    {
        $name = null;

        $boss = $this::find($this->direct_boss);

        if($boss){ $name = $boss->name; }

        return $name;
    }

}
