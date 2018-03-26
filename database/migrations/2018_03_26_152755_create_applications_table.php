<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number')->unique();
            $table->string('user_id');
            $table->string('place_of_birth');
            $table->string('place_of_residence');
            $table->string('year_of_birth');
            $table->string('education_level');
            $table->string('year_finished_sec');
            $table->string('sec_school');
            $table->string('index_no');
            $table->string('course');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_email')->unique();
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
        Schema::dropIfExists('applications');
    }
}
