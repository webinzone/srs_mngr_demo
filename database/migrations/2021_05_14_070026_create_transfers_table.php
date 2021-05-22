<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('dob');
            $table->string('gender');
            $table->string('nationality');
            $table->string('languages');
            $table->string('religion');
            $table->string('medicare_no');
            $table->string('pension_no');
            $table->string('chemist');
            $table->string('date');
            $table->string('from');
            $table->string('address');
            $table->string('ph');
            $table->string('fax');
            $table->string('to');
            $table->string('reason');
            $table->string('medication_chart');
            $table->string('medication_list');
            $table->string('websterpak');
            $table->string('medication_sent');
            $table->string('last_time_medication');
            $table->string('accompanying_reports');
            $table->string('next');
            $table->string('advised');
            $table->string('guardian');
            $table->string('guardian_advised');
            $table->string('case_manager');
            $table->string('case_manager_advised');
            $table->string('nomini');
            $table->string('nomini_advised');
            $table->string('admin');
            $table->string('admin_advised');

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
        Schema::dropIfExists('transfers');
    }
}
