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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->decimal('value', 10, 2);
            $table->enum('payment_method', ['credit_card', 'cash', 'bank_transfer']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
