<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();

            $table->bigInteger('especialidad_id')->unsigned();

            $table->date('fecha');
            $table->string('hora');
            $table->timestamps();

            $table->foreign('especialidad_id')->references('id')->on('especialidades')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
