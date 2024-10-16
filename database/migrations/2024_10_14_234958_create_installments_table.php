<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accounts_id')->constrained('accounts')->onDelete('cascade');
            $table->decimal('value_installment', 10, 2);
            $table->date('due_date');
            $table->boolean('paid');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('installments');
    }
};
