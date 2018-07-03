<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->date('date');
            $table->string('name_of_holder');
            $table->integer('age_of_the_holder');
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('colony')->nullable();
            $table->string('municipality')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('reference')->nullable();
            $table->string('relationship_with_your_reference')->nullable();
            $table->string('phone_your_reference')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('job_position')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('extension_of_the_company')->nullable();
            $table->string('hitch');
            $table->string('monthly_payments');
            $table->string('monthly_amount');
            $table->string('balance');
            $table->string('total_cost');
            $table->enum('payment_method',['bank','cash'])->default('cash');
            $table->string('bank')->nullable();
            $table->enum('billing',['yes','no'])->default('no');
            $table->enum('state',['0','1'])->default('1');
            $table->integer('employee_id')->unsigned()->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('set null');
            $table->integer('branch_office_id')->unsigned()->nullable();
            $table->foreign('branch_office_id')->references('id')->on('branch_offices')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
