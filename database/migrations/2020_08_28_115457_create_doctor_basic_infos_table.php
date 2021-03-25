<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_basic_infos', function (Blueprint $table) {
            $table->id();

            $table->string('drname');
            $table->bigInteger('drid');
            $table->string('mainspeciality');
            $table->string('state');
            $table->string('city');
            $table->integer('experience');
            $table->string('accepting');
            $table->longText('aboutdr');
            $table->mediumText('image')->nullable();
            $table->integer('visibility')->default('0');
            
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
        Schema::dropIfExists('doctor_basic_infos');
    }
}
