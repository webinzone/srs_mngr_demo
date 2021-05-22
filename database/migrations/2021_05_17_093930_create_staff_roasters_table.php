<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffRoastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_roasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_date');
            $table->string('s_name');
            $table->string('position');
            $table->string('mon');
            $table->string('tues');
            $table->string('wed');
            $table->string('thurs');
            $table->string('fri');
            $table->string('sat');
            $table->string('sun');
            $table->string('total_hrs');
            $table->string('total');

            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('staff_roasters');
    }
}
