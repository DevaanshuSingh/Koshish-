<!-- Called From truncateTable(); -->
<?php
require 'connection_db.php';
try {
    $pdo->exec('TRUNCATE TABLE user_information;
                            TRUNCATE TABLE performance;');
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>