<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Infos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Rectangle.css">
</head>

<body>
    <form action="register.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
        <div class="form-row d-flex container flex-wrap">
            <div class="form-group col-6">
                <label class="name_label" for="player_name">User Name</label>
                <input type="text" class="form-control" id="player_name" name="player_name" required>
            </div>
            <div class="form-group col-6">
                <label class="picture_label" for="picture">Profile Picture</label>
                <input type="file" class="form-control" id="picture" name="image" accept="image/*" capture="environment"
                    required>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
            <input type="hidden" name="client_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            <?php
            $_SESSION['ipIs'] = $_SERVER['REMOTE_ADDR'];
            ?>
        </div>
    </form>
</body>

</html>