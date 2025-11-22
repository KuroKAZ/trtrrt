<?php
echo "<h3>🔍 Проверяем подключение к базе...</h3>";

$host = 'localhost';
$user = 'root';
$dbname = 'restaurant_sapphire';

// Пароль который ты использовал при входе в MySQL
$password = '2216790'; // ⚠️ ЗАМЕНИ НА СВОЙ ПАРОЛЬ!

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    echo "❌ Ошибка подключения: " . $conn->connect_error . "<br>";
    echo "Используемый пароль: '$password'<br>";
} else {
    echo "<div style='background: green; color";
};
