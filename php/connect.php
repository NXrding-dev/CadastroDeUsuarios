<?php
    $dbHostname = "localhost";
    $db = "clientes";
    $dbUser = "root";
    $dbPass = "";

    $connect = mysqli_connect($dbHostname, $dbUser, $dbPass);
    $selectedDb = mysqli_select_db($connect, $db); 

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>