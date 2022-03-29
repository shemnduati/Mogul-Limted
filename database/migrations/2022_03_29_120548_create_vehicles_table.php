<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('Vehicle_Reg_No');
            $table->string('Vehicle_Type');
            $table->string('Vehicle_Model');
            $table->string('Location');
            $table->unsignedBigInteger('vehicle_status_id');
            $table->timestamps();
            $table->foreign('vehicle_status_id')->references('id')->on('vehicle_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
