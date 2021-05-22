<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('dob');
            $table->string('gender');
            $table->string('nation');
            $table->string('lan');
            $table->string('religion');
            $table->string('medi_no');
            $table->string('pension_no');
            $table->string('chemist');
            $table->string('date');
            $table->string('from');
            $table->string('address');
            $table->string('ph');
            $table->string('fax');
            $table->string('to');
            $table->string('reason');
            $table->string('medi_chart');
            $table->string('medi_list');
            $table->string('webst');
            $table->string('medi_sent');
            $table->string('last_time_medi');
            $table->string('accomp_rpt');
            $table->string('next');
            $table->string('advised');
            $table->string('guardian');
            $table->string('guardian_adv');
            $table->string('case_mngr');
            $table->string('case_mngr_adv');
            $table->string('nomini');
            $table->string('nomini_adv');
            $table->string('admin');
            $table->string('admin_adv');

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
        Schema::dropIfExists('transfer_records');
    }
}
