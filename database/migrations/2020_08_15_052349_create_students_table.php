<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role');
            $table->string('password');
            $table->rememberToken();
            $table->string('Nationality');
            $table->enum('gender',['male','female'])->nullable();
            $table->string('Countryofresidence');
            $table->string('City');
            $table->string('Contactno');
            $table->string('School name');
            $table->string('Admission number');
            $table->string('Profile');
            $table->integer('status');
            $table->date('Fromyear');
            $table->date('Toyear');
            $table->date('Passoutyear');
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
        Schema::dropIfExists('students');
    }
}
