<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name', 255);
            $table->char('address_nhan', 255);
            $table->char('email', 100);
            $table->char('phone_number', 11);
            $table->char('address_tra', 255);
            $table->boolean('isAccept');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}