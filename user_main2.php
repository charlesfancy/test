<?php
ini_set('display_errors', 1);
$servername = "mysql";
$username = "root";
$password = "root";
$db = 'test';

$now_id = $_COOKIE["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connection Successfully" . '<br />';

$sql = "SELECT * FROM users WHERE `id` = '$now_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
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
?>
<html>
    <head>
    </head>
    <body>
    <a href="user_edit.php">會員資訊修改</a>
    <a href="user_delete.php">會員資訊刪除</a>
        
    </body>
</html>
