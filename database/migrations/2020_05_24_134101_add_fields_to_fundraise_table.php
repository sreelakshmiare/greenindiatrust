<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToFundraiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fundraise', function (Blueprint $table) {
            $table->string('campaign_status')->nullable();
            $table->string('campaign_image')->nullable();
            $table->decimal("donation_raised_so_far",15,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fundraise', function (Blueprint $table) {
            $table->dropColumn('campaign_status');
            $table->dropColumn('campaign_image');
            $table->dropColumn('donation_raised_so_far');
        });
    }
}
