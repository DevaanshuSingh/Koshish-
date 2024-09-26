<?php
// session_start();
// if (isset($_POST['nowId'])) { // Check if nowId is set
//     $received = (int) $_POST['nowId'];
//         if ($received == 1) {
//             $received = 2;
//         }
//         elseif ($received == 2) {
//             $received = 1;
//         }
//         // $_SESSION['changed'] = $received;
//         $_SESSION['changed'] = 1;
//         echo $received; // Return the changed value
// } else {
//     $_SESSION['changed'] = 0.0;
// }
?>
<?php
// <!-- From Git -->
session_start();
if (isset($_POST['nowId'])) { // Check if nowId is set
    $received = (int)$_POST['nowId'];
    for ($i = 0; $i <= 1; $i++) {
        if ($received == 1) {
            $received = 2;
            break;
        }
        if ($received == 2) {
            $received = 1;
            break;
        }
        if ($received == 3) {
            $received = 4;
            break;
        }
        if ($received == 4) {
            $received = 1;
            break;
        }
    }
    $_SESSION['changed'] = $received;
    echo $received; // Return the incremented value
} else {
    ?>
    <script>
        alert(`Not Received`);
    </script>
    <?php
}
?>