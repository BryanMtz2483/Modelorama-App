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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); //NOS DA AUTOMATICAMENTE PRIMARY, NOT NULL, AUTO-INCREMENT
            $table->text('name');
            $table->integer('product_number');
            $table->text('desc');
            $table->text('branch');
            $table->text('price');
            $table->timestamps();//date format(mms)
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
