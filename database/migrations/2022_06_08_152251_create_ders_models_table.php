<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ders_models', function (Blueprint $table) {
            $table->id();
            $table->text('dersadi')->nullable();
            $table->text('derskonusu')->nullable();
            $table->text('ogretmenadi')->nullable();
            $table->text('telefonnumarasi')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('ders_models');
    }
}
