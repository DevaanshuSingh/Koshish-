<?php
//Now Instead Of Storing And Fetching onload The Dice Value Try For Store In Session And Use From Session Again Have To Update Overall !Db Use Sessions Global Array Of PHP (CHANGES IN 2 FILES updateDice.php AND showDice.php);

// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dice'])) {
//     $nowId = $_POST['nowId'];
//     $dice = $_POST['dice'];
//     $_SESSION[$nowId] = $dice;
// } else {
//     echo "No dice value was provided.";
// }

// Was
require "connection_db.php";
try {
    $nowId = $_POST['nowId'];
    $dice = $_POST['dice'];
    // Prepare and execute the update statement
        $stmt = $pdo->prepare("UPDATE performance SET dice = ? WHERE id = ?");
        $stmt->execute([$dice, $nowId]);
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>