<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;


Route::get('/', function () {
    return view('home');  // Твоя главная страница
});

// Маршруты для бронирования столов

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

// Тестовый маршрут для проверки базы
Route::get('/test-db', function () {
    try {
        // Проверяем подключение к базе
        DB::connection()->getPdo();
        echo "✅ База подключена!<br>";
        
        // Создаем таблицу если нет
        DB::statement("
            CREATE TABLE IF NOT EXISTS reservations (
                id INT AUTO_INCREMENT PRIMARY KEY,
                customer_name VARCHAR(100) NOT NULL,
                phone VARCHAR(20) NOT NULL,
                email VARCHAR(100),
                reservation_date DATE NOT NULL,
                reservation_time TIME NOT NULL,
                guests INT NOT NULL,
                comments TEXT,
                status VARCHAR(20) DEFAULT 'pending',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");
        
        echo "✅ Таблица reservations создана/проверена<br>";
        
        // Показываем существующие брони
        $reservations = DB::table('reservations')->get();
        echo "<h3>📊 Брони в базе (" . $reservations->count() . "):</h3>";
        foreach ($reservations as $reservation) {
            echo "👤 {$reservation->customer_name} - 📞 {$reservation->phone} - 📅 {$reservation->reservation_date} {$reservation->reservation_time}<br>";
        }
        
    } catch (Exception $e) {
        echo "❌ Ошибка: " . $e->getMessage();
    }
});