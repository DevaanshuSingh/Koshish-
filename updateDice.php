<?php
require "connection_db.php";
try {
    $nowId = $_POST['nowId'];
    $dice = $_POST['dice'];

    // Prepare and execute the update statement
    for($i=1;$i<=4;$i++){
        $stmt = $pdo->prepare("UPDATE performance SET dice = ? WHERE id = ?");
        $stmt->execute([$dice, $i]);}
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>