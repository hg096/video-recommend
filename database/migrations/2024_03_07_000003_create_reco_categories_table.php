<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 카테고리 여러개 선택할수도 있도록
     */
    public function up(): void
    {
        Schema::create('reco_categories', function (Blueprint $table) {
            $table->id();
            // $table->string('category');
            $table->timestamps();

            $table->foreignId('list_reco_categories_id')->constrained('list_reco_categories');
            $table->foreignId('recommend_id')->constrained('recommends');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reco_categories');
    }
};
