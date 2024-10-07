<?php
require "connection_db.php";
try {
    $nowId = $_POST['nowId'];
    $dice = $_POST['dice'];
    // Prepare and execute the update statement
        $stmt = $pdo->prepare("UPDATE performance SET dice = ? WHERE id = ?");
        $stmt->execute([$dice, $nowId]);
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>