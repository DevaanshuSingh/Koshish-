<?php
require 'connection_db.php';
try {
    $id=4;
    $stmt = $pdo->prepare("SELECT now_turn FROM performance WHERE id = ?");
    $stmt->execute([$id]);
    $starting = $stmt->fetchColumn();
    echo $starting;
} catch (PDOException $e) { 
    echo 'Database error: ' . $e->getMessage();
}