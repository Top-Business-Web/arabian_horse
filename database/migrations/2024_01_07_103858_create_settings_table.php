<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->longText('address_ar');
            $table->longText('address_en');
            $table->longText('desc_about_ar');
            $table->longText('desc_about_en');
            $table->string('link_youtube');
            $table->string('image');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('facebook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
