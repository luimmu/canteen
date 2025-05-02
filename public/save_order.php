<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$order_id = $_POST['order_id'] ?? '';
$items = $_POST['items'] ?? '';

if ($order_id && $items) {
    $logEntry = "[" . date("Y-m-d H:i:s") . "] Order ID: $order_id | Items: $items\n";
    file_put_contents("orders.txt", $logEntry, FILE_APPEND | LOCK_EX);
    echo "✅ Order logged!";
} else {
    echo "❌ Missing order_id or items.";
}
?>
