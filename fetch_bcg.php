<?php
require 'connection_db.php';

try {
    $ip = $_SERVER['REMOTE_ADDR'];
    $stmt = $pdo->prepare("SELECT background_color FROM user_information WHERE ip_address = ?");
    $stmt->execute([$ip]);
    $bcg = $stmt->fetchColumn();
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
echo $bcg;
?>