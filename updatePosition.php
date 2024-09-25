<!-- $query = $pdo->prepare("UPDATE performance SET currentPos = ? WHERE id = ?");
$query->execute([$currentPos, $idIs]); -->
<?php
//From here This Was Previous With Color Problem When Started The UpdatePos();;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// session_start();
// if (isset($_POST['nowId'])) { // Check if nowId is set
//     $nowId = (int) $_POST['nowId'];
//     $pos = (int) $_POST['currentPos'];
// } else {
//     $nowId = 0.0;
//     $pos = 0.0;
// }
// try{
//     $query = $pdo->prepare("UPDATE performance SET currentPos = ? WHERE id = ?");
//     $query->execute([$pos, $nowId]);

//     if ($query->execute([$pos, $nowId]) ) {
//         echo ' <meta http-equiv="refresh" content="0; url=index.php">';
//     } else {
//         echo "Error: Could not register student.";
//     }
// }catch (PDOException $e) {
//     echo 'Database error: ' . $e->getMessage();
// }
//to Here This Was Previous With Color Problem When Started The UpdatePos();;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

//Retrying
//Retrying













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