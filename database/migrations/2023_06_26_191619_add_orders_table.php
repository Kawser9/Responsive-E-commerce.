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
        $table->string('product',length:50);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->double('product',20, 2);
    }
};
