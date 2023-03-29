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
        Schema::create('settings', function (Blueprint $table) {
            
            $table->string('site_name',20)->nullable()->default('data');
            $table->string('logo',255)->nullable()->default('data');
            $table->string('phone',15)->nullable()->default('data');
            $table->string('email',25)->nullable()->default('data');
            $table->string('facebook',25)->nullable()->default('data');
            $table->string('twitter',25)->nullable()->default('data');
            $table->string('tiktok',25)->nullable()->default('data');
            $table->string('instagram',25)->nullable()->default('data');
            $table->string('meta_tag')->nullable()->default('data');
            $table->string('meta_desc')->nullable()->default('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
