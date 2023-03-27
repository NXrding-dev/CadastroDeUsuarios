<?php
    $dbHostname = "localhost";
    $db = "id20511771_usuarios";
    $dbUser = "id20511771_root";
    $dbPass = "e8p4?<i5lO*3PrCU";

    $connect = mysqli_connect($dbHostname, $dbUser, $dbPass);
    $selectedDb = mysqli_select_db($connect, $db); 

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>