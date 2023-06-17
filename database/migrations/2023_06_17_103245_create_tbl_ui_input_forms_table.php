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
        Schema::create('tbl_ui_input_forms', function (Blueprint $table) {
            $table->id();
            $table->string('key_name');
            $table->string('label_ja')->nullable();
            $table->string('label_en')->nullable();
            $table->string('placeholder_ja')->nullable();
            $table->string('placeholder_en')->nullable();
            $table->integer('type'); //[login,project, ...]
            $table->integer('myself');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ui_input_forms');
    }
};
