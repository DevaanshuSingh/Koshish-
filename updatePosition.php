<?php
require "connection_db.php";
try {
    $nowId = $_POST['nowId'];
    $pos = $_POST['pos'];
    
    // Prepare and execute the update statement
    $stmt = $pdo->prepare("UPDATE performance SET currentPos = ? WHERE id = ?");
    $stmt->execute([$pos, $nowId]);

    // Return the updated position as a response
    echo $pos;  // Send back the new position to the client
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>

<!-- <script>
    window.location.href = 'index.php';
    index.php.reload();
</script> -->
<?php
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