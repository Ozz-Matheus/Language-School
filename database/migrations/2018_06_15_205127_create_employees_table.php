<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('sex',['male','female'])->default('male');
            $table->string('phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->integer('direct_boss')->unsigned()->nullable();
            $table->foreign('direct_boss')->references('id')->on('employees')->onDelete('set null');
            $table->integer('job_position_id')->unsigned()->nullable();
            $table->foreign('job_position_id')->references('id')->on('job_positions')->onDelete('set null');
            $table->integer('branch_office_id')->unsigned()->nullable();
            $table->foreign('branch_office_id')->references('id')->on('branch_offices')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
