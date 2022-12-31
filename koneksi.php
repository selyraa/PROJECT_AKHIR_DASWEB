<?php   
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "gorent";

    $connect = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_error($connect));
?>