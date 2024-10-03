<?php
 try {
    $stmt = $pdo->prepare("SELECT now_turn FROM user_information WHERE id = ?");
    $starting=$stmt->fetchColumn(1);
    echo $starting;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>