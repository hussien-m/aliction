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
        Schema::create('section_titles', function (Blueprint $table) {
            $table->id();
            $table->text('client_title')->nullable();
            $table->text('how_title')->nullable();
            $table->text('feature_title')->nullable();
            $table->text('feature_title2')->nullable();
            $table->text('price_title')->nullable();
            $table->text('price_title2')->nullable();
            $table->text('faq_title')->nullable();
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
        Schema::dropIfExists('section_titles');
    }
};
