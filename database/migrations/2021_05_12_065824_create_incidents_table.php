<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('i_date');
            $table->string('i_time');
            $table->string('s_name');
            $table->string('s_sign');
            $table->string('p_name');
            $table->string('place');
            $table->string('doctor');
            $table->string('nok');
            $table->string('case_mgr');
            $table->string('management');
            $table->string('dhhs');
            $table->string('n_date');
            $table->string('n_time');
            $table->string('res_hos');
            $table->string('i_details');
            $table->string('actions');
            $table->string('action_date');
            $table->string('o_det');
            $table->string('i_prescribed');
            $table->string('police_noti');
            $table->string('sp_update');
            $table->string('reported');
            $table->string('auth_name');
            $table->string('rep_date');
            $table->string('rep_time');

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
        Schema::dropIfExists('incidents');
    }
}
