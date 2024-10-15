<!-- Called From getPlayerscount() -->
<?php
require 'connection_db.php';

try {
    $stmt = $pdo->prepare("SELECT count(id) FROM user_information;");
    $stmt->execute();
    $thisMuch = $stmt->fetchColumn();
    echo $thisMuch;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>