<?php
require "connection_db.php";
try {
    $nowId = $_POST['nowId'];
    $pos = $_POST['pos'];
    $stmt = $pdo->prepare("UPDATE performance SET currentPos = ? WHERE id = ?");
    $stmt->execute([$pos, $nowId]);
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
//Retrying}
//MayBe It Needs JS:
//For CHANGIG_ID
// if (!isset($_SESSION["changed"])) {
//     $_SESSION["changed"] = 1; // Initializing with a default value
//  }
//     $nowId = $_SESSION["changed"];
//     function positionFix() {
//             const xhr = new XMLHttpRequest();
//             xhr.open('POST', 'updatePosition.php', true);
//             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//             xhr.onload = function () {
//                     if (xhr.status === 200) {
//                             nowId = xhr.responseText;
//                             alert(`Position Updated Of : ${nowId} into ${updatedPos}`);
//                     }
//             }
//             xhr.send('updatePos=' + nowId);
//     }

?>