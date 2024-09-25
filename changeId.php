<?php
session_start();
if (isset($_POST['nowId'])) { // Check if nowId is set
    $received = (int) $_POST['nowId'];
        if ($received == 1) {
            $received = 2;
        }
        elseif ($received == 2) {
            $received = 1;
        }
        $_SESSION['changed'] = $received;
        echo $received; // Return the changed value
} else {
    $_SESSION['changed'] = 0.0;
}
?>