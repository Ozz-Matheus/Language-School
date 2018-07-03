<?php

namespace App;

use App\Payment;

use App\Enrollment;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'order', 'date', 'name_of_holder', 'age_of_the_holder', 'street', 'street_number', 'colony', 'municipality', 'home_phone', 'mobile_phone', 'reference', 'relationship_with_your_reference', 'phone_your_reference', 'company_name', 'company_address', 'job_position', 'company_phone', 'extension_of_the_company', 'hitch', 'monthly_payments', 'monthly_amount', 'balance', 'total_cost', 'payment_method', 'bank', 'billing', 'employee_id', 'branch_office_id', 
    ];

    public function branch_office()
    {
        return $this->belongsTo('App\Branch_office');
    }
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function associateHitch()
    {
        if($this->hitch AND $this->date )
        { 
            $payment = new Payment();
            $payment->value_of_payment = $this->hitch;
            $payment->date_of_payment = $this->date;
            $payment->contract()->associate($this);
            $payment->save();   
        }

    }
    public function makeEnrollments($request)
    {

        if($request->one){ 

            $enrollmentOne = new Enrollment();
            $enrollmentOne->name = $request->one;
            $enrollmentOne->age = $request->two;
            $enrollmentOne->level_id = '1';
            $enrollmentOne->branch_office_id = $request->branch_office_id;
            $enrollmentOne->contract()->associate($this);
            $enrollmentOne->save();

        }
        if($request->three){ 

            $enrollmentTwo = new Enrollment();
            $enrollmentTwo->name = $request->three;
            $enrollmentTwo->age = $request->four;
            $enrollmentTwo->level_id = '1';
            $enrollmentTwo->branch_office_id = $request->branch_office_id;
            $enrollmentTwo->contract()->associate($this);
            $enrollmentTwo->save(); 

        }
        if($request->five){

            $enrollmentThree = new Enrollment();
            $enrollmentThree->name = $request->five;
            $enrollmentThree->age = $request->six;
            $enrollmentThree->level_id = '1';
            $enrollmentThree->branch_office_id = $request->branch_office_id;
            $enrollmentThree->contract()->associate($this);
            $enrollmentThree->save();  

        }

    }


}
