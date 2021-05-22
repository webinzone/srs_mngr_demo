<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room');
            $table->string('items');
            $table->string('clean');
            $table->string('undamaged');
            $table->string('working');
            $table->string('prop_comments');
            $table->string('res_comments');

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
        Schema::dropIfExists('condition_reports');
    }
}
