<?php 
    include '../config.php';
    include './utils/VerifyUser.php';

    $name = utf8_encode($_POST['userName']);
    $email = $_POST['userEmail'];
    
    $userEmail = checkUser($email, $db);

    if(!empty($userEmail)){
        echo "User Already Registered";
        exit();
    }


    $sql = "INSERT INTO crudphpjquery(userName, userEmail) VALUES ('$name', '$email');";

    if (mysqli_query($db, $sql)) {
        echo true;
        exit();
    }

    echo false;
    exit();