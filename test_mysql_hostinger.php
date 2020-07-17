<?php
    $servername = "localhost";
    $username = "u259250103_root";
    $password = "1BOOBies12";
    $dbname = "u259250103_coffee";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SELECT... LIMIT (skip, show);         
    $sql = "SELECT * FROM products LIMIT 1";
    $result = $conn->query($sql);
    $prod_1 = $result->fetch_assoc();

    echo $prod_1["name"];
    echo $prod_1["weight"];
    echo $prod_1["price"];

    $conn->close();
?> 