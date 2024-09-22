<?php
session_start(); // Start the session

// Check if the POST data exists
if (isset($_POST['send'])) {
    // Get and cast the POST data to an integer
    $nowId = (int) $_POST['send'];

    // Log the received value (for debugging)
    error_log("Received value: $nowId");

    // Use the match expression to change the value
    $nowId = match($nowId) {
        1 => 2,
        2 => 1,
        // 3 => 4,
        // 4 => 1,
    };
    
    // Store the new `nowId` in the session
    $_SESSION['got'] = $nowId;

    // Log the updated session value (for debugging)
    error_log("Updated session GOT: " . $_SESSION['got']);

    // Output the new `nowId` value
    echo $nowId;
} else {
    echo "No input provided";
}
?>