<?php 
    include '../config.php';
    include './utils/VerifyUser.php';

    $id     = $_POST['userID'];
    $name   = utf8_encode($_POST['userName']);
    $email  = $_POST['userEmail'];

    
    $userEmail = checkUser($email, $db);

    if(!empty($userEmail)){
        echo "User Already Registered";
        exit();
    }

    $sql = "UPDATE crudphpjquery SET userName = '$name', userEmail = '$email' WHERE id = $id;";

    if (mysqli_query($db, $sql)) {
        echo true;
        exit();
    }

    echo false;
    exit();