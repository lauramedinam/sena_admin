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
        Schema::create('course_teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();
            //referenciando la tabla courses
            $table->foreign('course_id')
            ->references('id')
            ->on('courses')->onDelete('set null');
            //referenciando la tabla teachers
            $table->foreign('teacher_id')
            ->references('id')
            ->on('teachers')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_teachers');
    }
};
