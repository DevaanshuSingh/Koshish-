<?php
require "connection_db.php";
try {
    $nowId = 1;
        $stmt = $pdo->prepare("SELECT dice FROM performance WHERE id = ?");
        $stmt->execute([$nowId]);
        $diceIs=$stmt->fetchColumn();
        echo $diceIs;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>