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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('Final_Total', 10, 2)->nullable();
            $table->decimal('Price', 10, 2)->nullable();
            $table->string('Payment_Method')->nullable();
            $table->string('Payment_Status')->nullable();
            $table->enum('Status', ['processing', 'completed', 'decline'])->default('processing');
            $table->string('Currency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
