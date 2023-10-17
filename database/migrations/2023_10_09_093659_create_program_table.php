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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('banner');
            $table->string('program_name');
            $table->string('description');
            $table->date('start_date_program');
            $table->date('end_date_program');
            $table->date('date_program');
            $table->string('qouta');
            $table->string('price');
            $table->string('id_organizer');
            $table->string('id_location');
            $table->string('id_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
