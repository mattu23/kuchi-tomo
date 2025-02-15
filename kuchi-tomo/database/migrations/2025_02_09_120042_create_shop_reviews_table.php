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
        Schema::create('shop_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained('shops')->comment('レビューした店舗ID');
            $table->foreignId('user_id')->constrained('users')->comment('レビューしたユーザーID');
            $table->decimal('rating', 2, 1)->comment('評価（1.0〜5.0）');
            $table->text('comment')->comment('コメント');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_reviews');
    }
};
