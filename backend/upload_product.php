<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "You need to log in first";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $stmt = $conn->prepare("INSERT INTO products (title, image, description, price, quantity) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssdi", $title, $image, $description, $price, $quantity);

        if ($stmt->execute()) {
            echo "Product uploaded successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Failed to upload image";
    }

    $conn->close();
}
?>
