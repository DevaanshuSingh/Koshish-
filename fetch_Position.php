<?php
session_start();
require "connection_db.php";

$nowId = $_POST['idForGetPos'];
try {
    $stmt = $pdo->prepare("SELECT currentPos FROM performance WHERE id = ?");
    $stmt->execute([$nowId]);

    $posIs = $stmt->fetchColumn();
    if ($posIs !== false) {
        // echo "<h1>Current Position for ID ($nowId): \"$posIs\"</h1>";
    } else {
        echo "<h1>No Position found for ID ($nowId)</h1>";
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
echo $posIs;
$_SESSION['posIs'] = $posIs;