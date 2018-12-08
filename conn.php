<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "adiFood";
    $connect = new mysqli($host, $user, $pass, $db) or die("error" . mysqli_errno(connect));
?>
