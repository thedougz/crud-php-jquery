<?php 

    include '../config.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM crudphpjquery WHERE id = $id;";

    if (mysqli_query($db, $sql)) {
        echo true;
        exit();
    }

    echo false;
    exit();