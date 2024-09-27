<?php
session_start();
require "connection_db.php";

$nowId = $_POST['idForGetPos'];
try {
    // Prepare the statement with a placeholder
    $stmt = $pdo->prepare("SELECT currentPos FROM performance WHERE id = ?");
    
    // Execute the statement with the provided $nowId
    $stmt->execute([$nowId]);
    
    // Fetch the current position from the first column
    $posIs = $stmt->fetchColumn();
    
    // Check if a position was found for the given ID
    // if ($posIs !== false) {
    //     echo "<h1>Current Position for ID ($nowId): \"$posIs\"</h1>";
    // } else {
    //     echo "<h1>No Position found for ID ($nowId)</h1>";
    // }
} catch (PDOException $e) {
    // Handle any database errors
    echo 'Database error: ' . $e->getMessage();
}

echo $posIs;
// $_SESSION['posIs'] = $posIs;
?>