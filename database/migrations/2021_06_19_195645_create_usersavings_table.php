<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersavings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userid');
            $table->string('goalimagesrc');
            $table->string('goalname');
            $table->float('goalamount');
            $table->foreign('userid')->references('id')->on('savelyusers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersavings');
    }
}
