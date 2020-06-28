<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToGalleryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gallery_images', function (Blueprint $table) {
            $table->string('project')->nullable();
            $table->string('description')->nullable();
            $table->string('activity_date')->nullable();
            $table->string('state')->nullable();
            $table->string('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gallery_images', function (Blueprint $table) {
            $table->dropColumn('project');
            $table->dropColumn('description');
            $table->dropColumn('activity_date');
            $table->dropColumn('state');
            $table->dropColumn('location');
        });
    }
}
