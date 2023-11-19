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
        Schema::create('test_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained();
            $table->string('FieldName');
            $table->decimal('MinValue', 8, 2);
            $table->decimal('MaxValue', 8, 2);
            $table->string('Unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_fields');
    }
};
