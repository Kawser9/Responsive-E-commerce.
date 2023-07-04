<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) 
        {
            $table->id();
            $table->string('name',100);
            $table->double('price',10,2)->default(0,0);
            $table->integer('quantity')->default(0);
            $table->text('description');
            $table->string('status',10)->default('active');
            $table->integer('discount')->nullable();
            $table->string('discount-type')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
