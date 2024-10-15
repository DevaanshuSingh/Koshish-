<!-- Called From updateBcg(); -->
<?php
require "connection_db.php";
$idIs = null;
?>
<script>
    alert(`Inside updateBcg.php`);
</script>
<?php
try {
    $ip = $_SERVER['REMOTE_ADDR'];
    $stmt = $pdo->prepare("SELECT id FROM user_information WHERE ip_address = ?");
    $stmt->execute([$ip]);
    $idIs = $stmt->fetchColumn();
    if ($idIs === false) {
        throw new Exception(`No user found For this IP address:  \$ip`);
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

// Updating the background color in the database
try {
    if (isset($_POST['bcg_Color'])) {
        $bcg = $_POST['bcg_Color'];
        $stmt = $pdo->prepare("UPDATE user_information SET background_color = ? WHERE id = ?;");
        $stmt->execute([$bcg, $idIs]);
        echo "Background color updated successfully.";
    } else {
        throw new Exception("Background color not provided.");
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

?>