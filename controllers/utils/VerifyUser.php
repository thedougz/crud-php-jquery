<?php 

    function checkUser($email, $db){
        $sql = "SELECT userEmail FROM crudphpjquery WHERE userEmail = '$email';";
        $response = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($response);

        return $row['userEmail'];
    }