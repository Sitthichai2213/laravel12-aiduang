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
        Schema::create('klanig', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Monkey')->nullable();
            $table->float('Cat')->nullable();
            $table->string('Matt')->nullable();
            $table->date('David')->nullable();
            $table->text('Peter')->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klanig');
    }
};
