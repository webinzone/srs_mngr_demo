<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_agreements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('r_name');
            $table->string('room_no');
            $table->string('bed');
            $table->string('dob');
            $table->string('guardian');
            $table->string('admin');
            $table->string('p_nomini');
            $table->string('i_period');
            $table->string('f_period');
            $table->string('ending_on');
            $table->string('acc_fee');
            $table->string('pay_method');
            $table->string('freq_pay');
            $table->string('advnc_fee');
            $table->string('adv_fee');
            $table->string('secu_depo');
            $table->string('reserv_fee');
            $table->string('condition_rep');
            $table->string('res_service');
            $table->string('spl_item');
            $table->string('pers_prop');
            
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
        Schema::dropIfExists('resident_agreements');
    }
}
