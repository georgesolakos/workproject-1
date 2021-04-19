<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opex', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ship_id')->unsigned()->index();
            $table->foreign('ship_id')->references('id')->on('ship')->onDelete('cascade');
            $table->decimal('expenses', $precision = 8, $scale = 2);
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opex');
    }
}
