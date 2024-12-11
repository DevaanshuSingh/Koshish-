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
    // echo json_encode($ladder);//Instead Of Sending The Last Ladder's Info Send 0; That Is The SIgn Of (NO)
    echo 0;
} catch (PDOException $e) {
    echo 'Error While Getting Ladder: ' . $e->getMessage();
}

// $ladderStart = $ladder['ladderStart'];
// $add= '+';
// $ladderEnd = $ladder['ladderEnd'];
// $combine = $ladderStart . $add. $ladderEnd;
// echo json_encode($combine);//this should be in Json Format