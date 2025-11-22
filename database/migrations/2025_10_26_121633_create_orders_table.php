<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // основной ключ
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // внешний ключ для связи с пользователем
            $table->decimal('total', 10, 2); // общая сумма заказа
            $table->enum('status', ['pending', 'completed', 'cancelled']); // статус заказа
            $table->timestamps(); // метки времени для отслеживания времени создания и обновления
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
