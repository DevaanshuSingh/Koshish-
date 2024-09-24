<?php
require 'connection_db.php';
try {
    $stmt = $pdo->query('TRUNCATE table user_information;');
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>