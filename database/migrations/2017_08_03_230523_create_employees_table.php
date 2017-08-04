<?php

use Illuminate\Support\Facades\Schema;
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
            $table->char('emp_id', 10);
            $table->string('fname', 30);
            $table->string('mname', 30)->nullable();
            $table->string('lname', 30);
            $table->string('email', 50)->nullable();
            $table->string('phone', 50);
            $table->string('pan', 10)->nullable();
            $table->date('dob');
            $table->string('edu_qual', 50);
            $table->date('doj');
            $table->string('adhar', 20)->nullable();
            $table->string('gender', 10);
            $table->char('blood_group', 5);
            $table->text('present_add')->nullable();
            $table->text('permanent_add')->nullable();
            $table->string('court_id', 50);
            $table->string('loc_id', 50);
            $table->string('post_id', 50);
            $table->ipAddress('modifier');
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
        Schema::dropIfExists('employees');
    }
}
