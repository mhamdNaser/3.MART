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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Service_Id")->constrained("services")->cascadeOnDelete();
            $table->foreignId("User_Id")->constrained("users")->cascadeOnDelete();
            $table->string("City");
            $table->string("Street_Name");
            $table->string("Building_Number");
            $table->dateTime("Start_Time");
            $table->dateTime("End_Time")->nullable();
            $table->double("Total_Price")->nullable();
            $table->string("Status")->default("Pending");
            $table->string("Reject_Reason")->nullable();
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
        Schema::dropIfExists('reservations');
    }
};
