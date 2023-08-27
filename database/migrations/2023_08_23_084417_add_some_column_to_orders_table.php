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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('number');
            $table->string('payment_id')->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('order_status')->nullable();
            $table->string('transaction_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('number');
            $table->dropColumn('payment_id');
            $table->dropColumn('payment_status');
            $table->dropColumn('order_status');
            $table->dropColumn('transaction_id');
        });
    }
};
