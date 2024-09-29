<?php
require 'connection_db.php';

try {
    // Getting the user's IP address
    $ip = $_SERVER['REMOTE_ADDR'];
    // Prepare SQL to select the user's ID based on the IP address
    $stmt = $pdo->prepare("SELECT background_color FROM user_information WHERE ip_address = ?");
    $stmt->execute([$ip]);
    // Fetch the ID (check if an ID is returned)
    $bcg = $stmt->fetchColumn();
    // Check if a valid ID was retrieved
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
echo $bcg;
?>