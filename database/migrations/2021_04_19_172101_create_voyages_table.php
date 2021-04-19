<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ship_id')->unsigned();
            $table->foreign('ship_id')->references('id')->on('ship');
            $table->string('code');
            $table->string('status');
            $table->decimal('income', $precision = 8, $scale = 2);
            $table->decimal('expenses', $precision = 8, $scale = 2);
            $table->dateTime('start');
            $table->dateTime('finish');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}
