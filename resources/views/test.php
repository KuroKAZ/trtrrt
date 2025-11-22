<?php
require_once 'config/database.php';

$database = new Database();
$db = $database->getConnection();

echo "<h1>✅ База данных подключена!</h1>";

// Покажем все брони
$result = $db->query("SELECT * FROM reservations");
echo "<h3>📊 Брони в базе:</h3>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "👤 {$row['customer_name']} - 📞 {$row['phone']} - 📅 {$row['reservation_date']} {$row['reservation_time']}<br>";
    }
} else {
    echo "Пока нет броней<br>";
}

echo "<p><a href='home.blade.php'>← На главную</a></p>";
?>