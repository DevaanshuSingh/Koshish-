<!-- Called From startFrom() -->
<?php
require 'connection_db.php';
try {
    $id=4;
    $stmt = $pdo->prepare("SELECT now_turn FROM performance WHERE id = ?");
    $stmt->execute([$id]);
    $starting = $stmt->fetchColumn();  // Fetch the now_turn value from the database
    echo $starting;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

?>