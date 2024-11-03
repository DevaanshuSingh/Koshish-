<?php
require 'connection_db.php';

try {
    $stmt = $pdo->prepare(query: "SELECT seconds FROM performance WHERE id = 1;");
    $stmt->execute();
    $gotSec = $stmt->fetchColumn();
    echo $gotSec;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}