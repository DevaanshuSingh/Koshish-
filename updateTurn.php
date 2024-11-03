<?php
require 'connection_db.php';
try {
    $nowId = $_POST['now_turn'];
    for ($i = 0; $i <= 1; $i++) {
        if ($nowId == 1) {
            $nowId == 2;
            break;
        }
        if ($nowId == 2) {
            $nowId == 3;
            break;
        }
        if ($nowId == 3) {
            $nowId == 4;
            break;
        }
        if ($nowId == 4) {
            $nowId == 1;
            break;
        }
    }
    for ($i = 1; $i <= 4; $i++) {
        $stmt = $pdo->prepare("UPDATE performance SET now_turn = ? WHERE id = ?");
        $stmt->execute([$nowId, $i]);
    }
    $starting = $stmt->fetchColumn();
    echo $starting;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}