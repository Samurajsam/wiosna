<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWspolrzednesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wspolrzednes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa');
            $table->string('wspolrzedna1');
            $table->string('wspolrzedna2');
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
        Schema::dropIfExists('wspolrzednes');
    }
}
