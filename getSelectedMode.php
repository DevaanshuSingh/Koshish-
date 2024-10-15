<!-- Called From welcome(); -->
<!-- Called From timer(); -->
<?php
require "connection_db.php";
try {
        $stmt = $pdo->prepare("SELECT mode FROM user_information WHERE id = ?;");
        $stmt->execute([1]);
        $mode=$stmt->fetchColumn();
        echo $mode;
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>