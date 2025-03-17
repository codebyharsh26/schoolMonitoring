<?php
    $conn = mysqli_connect("localhost", "root", "", "bnpss");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Database connected successfully!";
?>