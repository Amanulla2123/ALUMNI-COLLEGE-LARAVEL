<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createposts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
           /*  $table->foreign('userId')
            ->references('id')->on('users'); */
            $table->string('title');
            $table->string('subtitle');
            $table->string('attachment1');
            $table->string('attachment2');
            $table->string('attachment3');
            $table->text('description');
            $table->integer('approve')->default(0);
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
        Schema::dropIfExists('createposts');
    }
}
