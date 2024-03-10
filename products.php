<?php
        // Database connection
$conn = new mysqli('localhost', 'root', '', 'interlink');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Fetch products from the database
$result = $conn->query("SELECT * FROM products");
$products = [];

if ($result === false) {
    die('Error executing the query: ' . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();
?>