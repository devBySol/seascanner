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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
        $table->foreignId('category_id')->constrained()->onDelete('cascade');
        $table->string('title');
        $table->text('description');
        $table->string('location');
        $table->decimal('price', 8, 2);
        $table->string('image')->nullable();
        $table->timestamps();
        $table->string('duration'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};