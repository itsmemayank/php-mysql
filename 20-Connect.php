<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    
    // Create Connection
    $conn = new mysqli($servername, $username, $password);

    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn.connect_error);
    }

    echo "Connected successfully";

?>