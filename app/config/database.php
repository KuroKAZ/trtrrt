<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '2216790';
    private $dbname = 'restaurant_sapphire';
    public $conn;

    public function getConnection() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        
        if ($this->conn->connect_error) {
            $this->createDatabase();
        }
        
        $this->createTables();
        return $this->conn;
    }

    private function createDatabase() {
        $temp_conn = new mysqli($this->host, $this->user, $this->pass);
        $temp_conn->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
        $temp_conn->close();
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    }

    private function createTables() {
        $sql = "CREATE TABLE IF NOT EXISTS reservations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            customer_name VARCHAR(100) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            email VARCHAR(100),
            reservation_date DATE NOT NULL,
            reservation_time TIME NOT NULL,
            guests INT NOT NULL,
            comments TEXT,
            status VARCHAR(20) DEFAULT 'pending',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        $this->conn->query($sql);
    }
}
?>