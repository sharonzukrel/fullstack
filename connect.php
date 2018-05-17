<?php

    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "fullstack";
    // Create connection
    $conn = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // $conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
    $conn->set_charset("utf8");
?>
