<?php

    // Database configuration
    $servername = "localhost"; // Replace with your database hostname
    $username = "root"; // Replace with your database username
    $password = "asbnbnassd"; // Replace with your database password
    $dbname = "mediconline"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        echo '<script>console.log("connection not established");</script>';
    } else {
        echo '<script>console.log("connection established");</script>';
    }


?>