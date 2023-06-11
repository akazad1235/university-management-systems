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
        Schema::create('tbl_ui_strings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->string('key_name');
            $table->string('en')->nullable();
            $table->string('ja')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ui_strings');
    }
};
