<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->integer("parent_id")->nullable();
            $table->integer("sort_order")->nullable();
            $table->string('action');
            $table->string('function_cd')->nullable();
            $table->string('active_ind')->default("Y");
            $table->string('external_url')->nullable();
            $table->integer("sub_parent_id")->nullable();
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
        Schema::dropIfExists('menu');
    }
}
