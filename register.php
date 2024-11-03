<?php
// Database connection
require 'connection_db.php';

try {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $player_name = $_POST['player_name'];
        $ip = $_POST['client_ip'];
        $mode=$_POST['mode'];

        // file jhamela
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $fileType = $_FILES['image']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // Define allowed file extensions
            $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($fileExtension, $allowedExts)) {
                // Define upload path
                $uploadFileDir = './uploaded_files/';
                $dest_path = $uploadFileDir . $fileName;

                // Create directory if it doesn't exist
                if (!is_dir($uploadFileDir)) {
                    mkdir($uploadFileDir, 0755, true);
                }

                // Move the file to the upload directory
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    $imagePath = $dest_path;
                } else {
                    echo "Error moving the uploaded file.";
                    exit;
                }
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
        } else {
            echo "No file uploaded or there was an upload error.";
            exit;
        }
        // file jhamela

        // in user_information Table 
        $stmt = $pdo->prepare("INSERT INTO user_information (name, profile,ip_address,mode) VALUES (?,?,?,?)");
        
        if ($stmt->execute([$player_name, $imagePath, $ip,$mode])) {
            // echo "Player registered successfully!";
            // echo '<h1 style="height:20vh;"><a href="index.php">INDEX.PHP</a></h1>';
            echo ' <meta http-equiv="refresh" content="0; url=index.php">';
        } else {
            echo "Error: Could not register student.";
        }
        
        /* in performance Table*/
        $stmt = $pdo->prepare("INSERT INTO performance (name,currentPos) VALUES (?,?)");

        if ($stmt->execute([$player_name,1])) {
            echo ' <meta http-equiv="refresh" content="0; url=index.php">';
        } else {
            echo "Error: Could not register student.";
        }
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}