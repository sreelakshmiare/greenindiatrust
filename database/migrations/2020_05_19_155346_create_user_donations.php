<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDonations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_donations', function (Blueprint $table) {
            $table->id();   
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pin')->nullable();                     
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('pan')->nullable();
            $table->string('aadhar')->nullable();            
            $table->integer('user_id');
            $table->string('status')->nullable();
            $table->timestamp('donation_date')->nullable();
            $table->decimal("donation_amount",15,2);
            $table->string('donation_for')->nullable();                        
            $table->string('payment_id');
            $table->string('user_donation_id');
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
        Schema::dropIfExists('user_donations');
    }
}
