<?php
// session_start(); // Start the session

// // Get the POST data
// $nowId = $_POST['inJs'] ?? null; // Use null coalescing to avoid errors if `inJs` is not sent

// if ($nowId !== null) {
//     // Ensure that the variable is cast to an integer
//     $nowId = (int)$nowId;

//     // Use the match expression to change the value
//     $nowId = match($nowId) {
//         1 => 2,
//         2 => 1,
//         default => $nowId,
//     };

//     // Store the new `nowId` in the session
//     $_SESSION['cId'] = $nowId;

//     // Output the new `nowId` value
//     echo $nowId;
// } else {
//     echo "No input provided";
// }


session_start(); // Start the session

// Get the POST data
$nowId = $_POST['inJs'] ?? null; // Use null coalescing to avoid errors if `inJs` is not sent

if ($nowId !== null) {
    // Ensure that the variable is cast to an integer
    $nowId = (int)$nowId;

    // Use the match expression to change the value
    $nowId = match($nowId) {
        1 => 2,
        2 => 1,
        default => $nowId,
    };

    // Store the new `nowId` in the session
    $_SESSION['cId'] = $nowId;

    // Output the new `nowId` value
    echo $nowId;
} else {
    echo "No input provided";
}
?>