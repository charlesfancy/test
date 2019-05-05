<?php
    include('mysql_connect.php');

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'ID: ' . $row['id'] . '<br />';
        echo 'Account: ' . $row['account'] . '<br />';
        echo 'password: ' . $row['password'] . '<br />';
        echo 'Name: ' . $row['name'] . '<br />';
        echo 'Sex: ' . $row['sex'] . '<br />';
        echo 'Year: ' . $row['year'] . '<br />';
        echo 'Month: ' . $row['month'] . '<br />';
        echo 'day: ' . $row['day'] . '<br />';
        echo 'Phone: ' . $row['phone'] . '<br />';
        echo 'Email: ' . $row['email'] . '<br />';
        echo 'Comment: ' . $row['comment'] . '<br /><br />';
        
    }
}
