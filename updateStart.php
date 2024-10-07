<?php

    // startFrom.php
    require 'connection_db.php';
    try {
        $nowId=$_POST['nowId'];
        $stmt = $pdo->prepare("UPDATE performance SET start = true WHERE id = ?");
        $stmt->execute([$nowId]);
        } catch (PDOException $e) {
        echo 'Database error: ' . $e->getMessage();
    }
?>