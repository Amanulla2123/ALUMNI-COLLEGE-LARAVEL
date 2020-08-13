<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           /*  $table->string('Nationality');
            $table->string('Country of residence');
            $table->string('City');
            $table->string('School name');
            $table->string('Admission number');
            $table->string('Profile');
            $table->integer('status');
            $table->year('Fromyear');
            $table->year('Toyear');
            $table->year('Passoutyear'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('Nationality');
            $table->dropColumn('Country of residence');
            $table->dropColumn('City');
            $table->dropColumn('School name');
            $table->dropColumn('Admission number');
            $table->dropColumn('Profile');
            $table->dropColumn('status');
            $table->dropColumn('Fromyear');
            $table->dropColumn('Toyear');
            $table->dropColumn('Passoutyear');
        });
    }
}
