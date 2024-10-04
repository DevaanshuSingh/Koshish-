<?php
require 'connection_db.php';
try {
    $nowId=$_POST['now_turn'];
    for($i=1;$i<=4;$i++){
    $stmt = $pdo->prepare("UPDATE performance SET now_turn = ? WHERE id = ?");
    $stmt->execute([$nowId, $i]);
    }
    $starting = $stmt->fetchColumn();  // Fetch the now_turn value from the database
    echo $starting;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>