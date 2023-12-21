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
        Schema::create('test_case', function (Blueprint $table) {
            $table->id();
            $table->string('test_case_id');
            $table->string('topic');
            $table->integer('bobot');
            $table->string('description');
            $table->text('testplan')->nullable(); ;
            $table->boolean('is_draft')->default(false);
            $table->boolean('is_success')->default(false);
            
            
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_case');
    }
};
