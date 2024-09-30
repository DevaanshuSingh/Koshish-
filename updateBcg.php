<?php
require "connection_db.php";

// Initialize the variable
$idIs = null;
?>
<script>
    alert(`Inside updateBcg.php`);
</script>
<?php
try {
    // Getting the user's IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Prepare SQL to select the user's ID based on the IP address
    $stmt = $pdo->prepare("SELECT id FROM user_information WHERE ip_address = ?");
    $stmt->execute([$ip]);

    // Fetch the ID (check if an ID is returned)
    $idIs = $stmt->fetchColumn();

    // Check if a valid ID Is retrieved
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

        // Prepare SQL to update the background color for the user
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