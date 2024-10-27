<?php
require 'connection_db.php';
try {
    $nowId = $_POST['nowId'];
    $stmt = $pdo->prepare('SELECT start FROM performance WHERE id = ?');
    $stmt->execute([$nowId]);
    $start = $stmt->fetchColumn(0);
    echo $start;
    // echo `Did Not Got Start Of $nowId`;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>