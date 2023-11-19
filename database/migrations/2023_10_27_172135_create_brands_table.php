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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ar_name');
            $table->string('first_ar_letter')->nullable();
            $table->string('logo')->default('logo.png');
            $table->string('first_letter')->nullable();
            $table->string('video')->default('video.gif');
            $table->unsignedBigInteger('alternative_id')->nullable();
            $table->unsignedBigInteger('made_by')->nullable();
            $table->foreign('made_by')->references('id')->on('countries')->onDelete('SET NULL');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
