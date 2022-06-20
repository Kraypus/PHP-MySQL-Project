<?php
    $host = "localhost";
    $username = "nastava";
    $password = "nastava123";
    $database = "nastava_db";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>