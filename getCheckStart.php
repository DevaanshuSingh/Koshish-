<!-- Called From getCheckStart(); -->
<?php
// first
// require 'connection_db.php';
// try {
//     $nowId = $_GET['nowId'];

//     $stmt = $pdo->prepare('SELECT start FROM performance WHERE id = ?');
//     $stmt->execute([$nowId]);

//     $start = $stmt->fetchColumn(); // Fetch the column as a boolean

//     // Return the boolean result as a string
//     echo $start;
// } catch (PDOException $e) {
//     echo 'Database error: ' . $e->getMessage();
// }
// second
// require 'connection_db.php';
// try {
//     // Use $_GET as it's a GET request
//     $nowId = $_POST['nowId'];

//     $stmt = $pdo->prepare('SELECT start FROM performance WHERE id = ?');
//     $stmt->execute([$nowId]);

//     $start = (bool)$stmt->fetchColumn(); // Fetch the column as a boolean

//     // Return the boolean result as a string
//     echo 'sending $start ? "true : false"';
// } catch (PDOException $e) {
//     echo 'Database error: ' . $e->getMessage();
// }

// gpt
require 'connection_db.php';
try {
    $nowId = $_POST['nowId'];
    $stmt = $pdo->prepare('SELECT start FROM performance WHERE id = ?');
    $stmt->execute([$nowId]);
    $start = $stmt->fetchColumn();
    echo $start;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>