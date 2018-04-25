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
            $table->unsignedInteger('user_id');
            $table->string('id_number')->unique();
            $table->string('place_of_birth');
            $table->string('place_of_residence');
            $table->string('year_of_birth');
            $table->string('education_level');
            $table->string('year_finished_sec');
            $table->string('sec_school');
            $table->string('index_no');
            $table->string('higher_inst');
            $table->string('course');
            $table->string('subject_one');
            $table->string('subject_two');
            $table->string('first_reference');
            $table->string('second_reference');
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_phone');
            $table->string('relationship');
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
