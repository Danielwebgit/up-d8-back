<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableAddressAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_addresses', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('address_states')->onDelete('cascade');

            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('address_cities')->onDelete('cascade');

            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

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
        Schema::dropIfExists('address_addresses');
    }
}
