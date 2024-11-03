<?php
// startFrom.php
require 'connection_db.php';
try {
    $nowId = $_POST['nowId'];
    $stmt = $pdo->prepare("UPDATE performance SET start = 1 WHERE id = ?");
    if ($stmt->execute([$nowId]))
        echo `updated start of id:$nowId`;
    else
        echo `Not Updated Start Of Id $nowId`;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
