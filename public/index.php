<?php
$servername = "sqlXXX.infinityfree.com"; // ← You'll get this from the "MySQL Databases" section
$username = "if0_38877045";
$password = "0172266787aA";
$database = "if0_38877045_canteen_db"; // ← Use your actual DB name here

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$order_id = $_POST['order_id'];
$items = $_POST['items'];

$sql = "INSERT INTO orders (order_id, order_item) VALUES ('$order_id', '$items')";
if ($conn->query($sql) === TRUE) {
    echo "Order saved successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
