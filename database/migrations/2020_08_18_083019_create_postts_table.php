<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('userId')->nullable();
            $table->foreign('userId')
            ->references('id')->on('users')->onUpdate('cascade') ->onDelete('some action');;
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
        Schema::dropIfExists('postts');
    }
}
