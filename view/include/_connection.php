<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ak";

    $conn = mysqli_connect($server , $username, $password, $database);

    if (!$conn){
        die("failed to connect".mysqli_connect_error());
    }

?>