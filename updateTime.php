<?php
require 'connection_db.php';

try{
    $min = $_POST['min'];
    $sec = $_POST['sec'];
    $stmt = $pdo->prepare("UPDATE performance SET minutes = ? WHERE id = 1");
    $stmt->execute([$min]);
    $stmt = $pdo->prepare("UPDATE performance SET seconds = ? WHERE id = 1");
    $stmt->execute([$sec]);

} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

?>