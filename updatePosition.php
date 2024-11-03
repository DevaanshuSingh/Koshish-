<?php
require "connection_db.php";
try {
    $nowId = $_POST['nowId'];
    $pos = $_POST['pos'];
    
    // Prepare and execute the update statement
    $stmt = $pdo->prepare("UPDATE performance SET currentPos = ? WHERE id = ?");
    $stmt->execute([$pos, $nowId]);

    // Return the updated position as a response
    echo $pos;  // Send back the new position to the client
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}