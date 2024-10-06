<?php
require "connection_db.php";
try {
    $dice = $_POST['dice'];

    // Prepare and execute the update statement
    for($id=1;$id<=4;$id++){
        $stmt = $pdo->prepare("UPDATE performance SET dice = ? WHERE id = ?");
        $stmt->execute([$dice, $id]);
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>