<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $db = "voc";

    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $db);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // mysqli_query($conn, "SET NAMES utf8");

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["us-cdbr-iron-east-01.cleardb.net"];
    $username = $url["b1ce62e7023f28"];
    $password = $url["c1992881"];
    $db = substr($url["heroku_14c156b1cb4da80"], 1);

    $conn = new mysqli($server, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");