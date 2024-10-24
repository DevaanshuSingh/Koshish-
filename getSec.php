<?php
require 'connection_db.php';

try{
    $stmt = $pdo->prepare(query: "SELECT seconds FROM performance WHERE id = 1;");
    $stmt->execute();
    $getSec = $stmt->fetchColumn();
    echo $getSec;

} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

?>