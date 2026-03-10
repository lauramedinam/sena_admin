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
        Schema::create('apprendices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cell_number');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('computer_id')->nullable();
            //referenciando la tabla courses
            $table->foreign('course_id')
            ->references('id')
            ->on('courses')->onDelete('set null');
            //referenciando la tabla computers   
            $table->foreign('cumputer_id')
            ->references('id')
            ->on('cumputers')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprendices');
    }
};
