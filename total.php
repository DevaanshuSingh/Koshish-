<?php
require 'connection_db.php';
try {
    $stmt = $pdo->prepare("SELECT COUNT(id) FROM performation");
    $stmt->execute();
    $totalPlayers = $stmt->fetchColumn();
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
    $totalPlayers=0;
}
echo $totalPlayers;