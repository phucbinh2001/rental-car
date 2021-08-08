<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableHangXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TableHangXe', function (Blueprint $table) {
            $table->increments('carID');
            $table->string('currentLocationID', 3);
            $table->string('typeID', 4);
            $table->string('color', 45);
            $table->string('brand', 45);
            $table->string('model', 45);
            $table->string('desc', 45);
            $table->date('purchDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TableHangXe');
    }
}