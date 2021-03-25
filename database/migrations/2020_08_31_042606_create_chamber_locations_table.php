<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamberLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamber_locations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('drid');
            $table->string('chambername');
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->integer('telephone');
            $table->string('accepting');
            
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
        Schema::dropIfExists('chamber_locations');
    }
}
