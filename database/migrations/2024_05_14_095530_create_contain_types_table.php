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
        Schema::create('contain_types', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_type')->nullable();
            $table->string('assign_name');
            $table->string('status');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Add this line
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contain_types');
    }

    
};
