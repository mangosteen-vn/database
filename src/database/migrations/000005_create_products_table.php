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
        Schema::create('products', static function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->string('thumbnail')->nullable();
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->integer('original_price')->nullable();
            $table->integer('current_price')->nullable();
            $table->integer('quantity')->unsigned()->default(0);
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->timestamps();
            $table->softDeletes()->index();

            // Index
            $table->index('slug');
            $table->index('collection_id');

            // Foreign
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
