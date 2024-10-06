<?php
// startFrom.php
require 'connection_db.php';
try {
    $nowId=$_POST['nowId'];
    $stmt = $pdo->prepare("SELECT profile FROM user_information WHERE id = ?");
    $stmt->execute([$nowId]);
    $starting = $stmt->fetchColumn();  // Fetch the now_turn value from the database
    echo $starting;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

?>