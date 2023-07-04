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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        DB::table('collections')->insert([
            ['name' => 'Sản phẩm hot', 'type' => 'hot'],
            ['name' => 'Sản phẩm bán chạy', 'type' => 'best-selling'],
            ['name' => 'Sản phẩm giảm giá', 'type' => 'discounted'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
