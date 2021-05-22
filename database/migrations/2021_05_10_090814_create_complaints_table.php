<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('f_name');
            $table->string('user_name');
            $table->string('c_name');
            $table->string('com_details');
            $table->string('com_nature');
            $table->string('phone');
            $table->string('suggestions');
            $table->string('sign');
            $table->string('action_date');
            $table->string('action_taken');
            $table->string('outcome');

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
        Schema::dropIfExists('complaints');
    }
}
