<?php

require 'connection_db.php';

try {
    $newPos = $_POST['newPos'];
    $stmt = $pdo->prepare("SELECT * FROM ladders;");
    $stmt->execute([]);
    $ladders = $stmt->fetchAll();

    foreach ($ladders as $ladder) {
        if ($newPos == $ladder['ladderStart']) {
            // print_r($ladder);
            echo json_encode($ladder);
            exit;
        } else
            echo `$newPos,`;
    }
    // print_r($ladder);
    // echo "Not Matched";
    echo json_encode($ladder);
} catch (PDOException $e) {
    echo 'Error While Getting Ladder: ' . $e->getMessage();
}