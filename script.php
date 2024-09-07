<script>
    //number generataor
    function numberValue() {
        let input_var = document.getElementById('showValue');
        input_var.value = Math.floor(Math.random() * 6) + 1;
    }
    let currentPos = <?php
    require 'connection_db.php';
        try {
            $stmt = $pdo->query('select * from user_information where id=4');
            $records = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "<img src='{$records['profile']}' alt='Profile Picture' style='width: 100%; height: auto;'>";
            echo '<br>';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=\"{$row['id']}\">{$row['qualification_name']}</option>";
            }
        } catch (PDOException $e) {
            echo 'Database error: ' . $e->getMessage();
        }
    ?>;
</script>