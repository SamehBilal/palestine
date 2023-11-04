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
        Schema::create('livetrackers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('total_deaths');
            $table->unsignedBigInteger('women_deaths')->nullable();
            $table->unsignedBigInteger('children_deaths')->nullable();
            $table->unsignedBigInteger('elders_deaths')->nullable();
            $table->unsignedBigInteger('total_injuries');
            $table->unsignedBigInteger('total_displaced')->nullable();
            $table->unsignedBigInteger('total_destroyed_residential_units')->nullable();
            $table->unsignedBigInteger('other_side_deaths')->nullable();
            $table->unsignedBigInteger('other_side_injuries')->nullable();
            $table->timestamp('last_update')->useCurrent();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livetrackers');
    }
};
