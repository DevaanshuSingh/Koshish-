<!-- Called From showDice(); -->
<?php
//Now Instead Of Storing And Fetching onload The Dice Value Try For Store In Session And Use From Session Again Have To Update Overall !Db Use Sessions Global Array Of PHP (CHANGES IN 2 FILES updateDice.php AND showDice.php);
// is
// session_start();

// Check if the session variable 'diceIs' is set before attempting to display it
// $nowId=$_POST['nowId'];
// $dice=$_SESSION[$nowId];
// echo $dice;

// was
require "connection_db.php";

try {
    if (isset($_POST['nowId'])) {
        $nowId = $_POST['nowId'];
        $stmt = $pdo->prepare("SELECT dice FROM performance WHERE id = ?");
        $stmt->execute([$nowId]);
        $diceIs = $stmt->fetchColumn();
        echo $diceIs;
    } else {
        echo "No 'nowId' provided.";
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

?>