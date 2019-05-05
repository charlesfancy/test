<?php
    ini_set('display_errors', 1);
    $servername = 'mysql';
    $username = 'root';
    $password = 'root';
    $db = 'test';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        echo 'DB Connection Successfully' . '<br />';
    }