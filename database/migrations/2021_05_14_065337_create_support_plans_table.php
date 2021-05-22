<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('hygiene');
            $table->string('nutrition');
            $table->string('health_care');
            $table->string('medication');
            $table->string('social_contact');
            $table->string('behaviour');
            $table->string('goals');
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
        Schema::dropIfExists('support_plans');
    }
}
