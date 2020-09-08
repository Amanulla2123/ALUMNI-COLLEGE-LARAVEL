<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAttachment1ColumnToCreateCreatepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('createposts', function (Blueprint $table) {
            $table->string('attachment1')->nullable()->change();
            $table->string('attachment2')->nullable()->change();
            $table->string('attachment3')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('createposts', function (Blueprint $table) {
            $table->string('attachment1')->nullable(false)->change();
            $table->string('attachment2')->nullable(false)->change();
            $table->string('attachment3')->nullable(false)->change();
        });
    }
}
