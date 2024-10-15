<!-- Called From getId() -->
<?php
session_start();
if (isset($_POST['nowId'])) {
    $received = (int) $_POST['nowId'];
    for ($i = 0; $i <= 1; $i++) {
        if ($received == 1) {
            $received = 2;
            break;
        }
        if ($received == 2) {
            $received = 3;
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
    echo $received;
} else {
    ?>
    <script>
        alert(`Not Received`);
    </script>
    <?php
}