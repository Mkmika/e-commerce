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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->string('quantite');
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on( 'produits');
            $table->unsignedBigInteger('cart_id');
            $table->foreign('cart_id')->references('id')->on( 'carts');       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
