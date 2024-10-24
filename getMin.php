<?php
require 'connection_db.php';

try{
    $stmt = $pdo->prepare(query: "SELECT minutes FROM performance WHERE id = 1;");
    $stmt->execute();
    $getMin = $stmt->fetchColumn();
    echo $getMin;

} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

?>