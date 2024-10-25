<?php
require "connection_db.php";

try {
    $min = $_POST['min'];
    $sec = $_POST['sec'];
    //Min Updation
    $stmt = $pdo->prepare("UPDATE performance SET minutes = ?;");
    if (!$stmt->execute([$min]))
        echo "Not Updated MIN";
    else
        echo "UPDATED MIN";

    //Sec Updation
    $stmt = $pdo->prepare("UPDATE performance SET seconds = ?;");
    if (!$stmt->execute([$sec]))
        echo "Not Updated SEC";
    else
        echo " UPDATED SEC";


} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>