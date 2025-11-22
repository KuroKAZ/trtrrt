<?php
header('Content-Type: application/json');
include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    try {
        $database = new Database();
        $db = $database->getConnection();
        
        // Начинаем транзакцию
        $db->beginTransaction();
        
        // Сохраняем основной заказ
        $order_query = "INSERT INTO orders SET customer_name=:customer_name, phone=:phone, email=:email, total_amount=:total_amount, order_type=:order_type";
        $order_stmt = $db->prepare($order_query);
        
        $order_stmt->bindParam(":customer_name", $data['customer_name']);
        $order_stmt->bindParam(":phone", $data['phone']);
        $order_stmt->bindParam(":email", $data['email']);
        $order_stmt->bindParam(":total_amount", $data['total_amount']);
        $order_stmt->bindParam(":order_type", $data['order_type']);
        
        $order_stmt->execute();
        $order_id = $db->lastInsertId();
        
        // Сохраняем элементы заказа
        $item_query = "INSERT INTO order_items SET order_id=:order_id, item_name=:item_name, price=:price, quantity=:quantity, description=:description";
        $item_stmt = $db->prepare($item_query);
        
        foreach ($data['items'] as $item) {
            $item_stmt->bindParam(":order_id", $order_id);
            $item_stmt->bindParam(":item_name", $item['title']);
            $item_stmt->bindParam(":price", $item['price']);
            $item_stmt->bindParam(":quantity", $item['quantity']);
            $item_stmt->bindParam(":description", $item['description']);
            $item_stmt->execute();
        }
        
        $db->commit();
        
        echo json_encode([
            'success' => true,
            'message' => '✅ Заказ успешно оформлен! Номер заказа: ' . $order_id,
            'order_id' => $order_id
        ]);
        
    } catch (Exception $e) {
        if (isset($db)) {
            $db->rollBack();
        }
        echo json_encode([
            'success' => false,
            'message' => '❌ Ошибка при оформлении заказа: ' . $e->getMessage()
        ]);
    }
}
?>