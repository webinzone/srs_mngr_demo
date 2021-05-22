<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('c_name');
            $table->string('b_from');
            $table->string('b_to');
            $table->string('bed');
            $table->string('pay_via');
            $table->string('quated_fee');
            $table->string('freq_fee');
            $table->string('dob');
            $table->string('age');
            $table->string('reffer_ph');
            $table->string('f_address');
            $table->string('reason');
            $table->string('p_car');
            $table->string('d_history');
            $table->string('behav');
            $table->string('substances');
            $table->string('c_meds');
            $table->string('case_mngr');
            $table->string('social_wrkr');
            $table->string('forensic_history');
            $table->string('notes');
            
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
        Schema::dropIfExists('bookings');
    }
}
