<?php
require 'connection_db.php';
try {
    // Use $_GET as it's a GET request
    $nowId = $_GET['nowId'];

    $stmt = $pdo->prepare('SELECT start FROM performance WHERE id = ?');
    $stmt->execute([$nowId]);

    $start = (bool)$stmt->fetchColumn(); // Fetch the column as a boolean

    // Return the boolean result as a string
    echo $start ? 'true' : 'false';
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
