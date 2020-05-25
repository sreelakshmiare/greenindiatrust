<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('mobile');
            $table->string('gender');
            $table->string('age');
            $table->string('address');
            $table->string('education')->nullable();
            $table->string('periodofvolunteer')->nullable();
            $table->string('areasofinterest')->nullable();
            $table->string('relocating')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('liketodonate')->nullable();
            $table->string('acceptterms')->nullable();          
            $table->string('active_ind')->default("Y");
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
        Schema::dropIfExists('volunteer');
    }
}
