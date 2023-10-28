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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('salt', 50);
            $table->string('mime', 25);
            $table->string('size',15);
            $table->string('dimention', 40);
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->tinyInteger('dim')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
