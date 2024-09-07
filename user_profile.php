<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Infos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        form{
            background-color: rgba(227, 68, 219, 0.831);
            height:80vh;
        }
        .name_label{
            background-color: rgb(28, 229, 229);
            width: 20vw;
        border-top-right-radius: 100% ;
            }
        .picture_label{
            background-color: rgb(28, 229, 229);
            width: 20vw;
        border-top-right-radius: 100%;
            }
            #picture{
                width: 35vw;
            }
            .btn{
                position: relative;
                top: 5vh;
                transform: rotate(90deg);
                border-top-left-radius: 70%;
                border-bottom-left-radius: 70%;
            }
    </style>
</head>
<body>
<form action="register.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="form-row d-flex container flex-wrap">
                <div class="form-group col-md-6">
                    <label class="name_label" for="player_name">User Name</label>
                    <input type="text" class="form-control" id="player_name" name="player_name" required>
                </div>
                <div class="form-group col-md-3">
                    <label class="picture_label" for="image">Profile Picture</label>
                    <input type="file" class="form-control" id="picture" name="image" accept="image/*" capture="environment" required>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn d-block mx-auto btn-dark btn-primary">Register</button>
                </div>
            </div>
        </form>
</body>
</html>