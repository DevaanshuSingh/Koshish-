<?php
require 'connection_db.php';
try {
    $stmt = $pdo->query('TRUNCATE table user_information;');
    $stmt = $pdo->query('TRUNCATE table performance;');

} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>