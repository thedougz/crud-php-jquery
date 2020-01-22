<?php

    header('Content-type: text/html; charset=utf-8');    
    setlocale(LC_ALL, NULL);
    setlocale(LC_ALL, 'pt_BR.utf-8'); 

    //BASE VARS
    $title = "CRUD - PHP - jQuery";
    $url = "https://thedougz.com/exemples/CRUD";
    
    //DATABASE 
    $host = "";
    $user = "";
    $pass = "";
    $data = "";

    $db = new mysqli($host, $user, $pass, $data);