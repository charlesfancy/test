<?php
ini_set('display_errors', 1);
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$account=$_POST["account"];
$password=$_POST["password"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$year=$_POST["year"];
$month=$_POST["month"];
$day=$_POST["day"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$comment=$_POST["comment"];

$sql = "INSERT INTO users (account, password, name, sex, year, month, day, phone, email, comment)
VALUES ('$account', '$password', '$name', '$sex', '$year', '$month', '$day', '$phone', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Hi~ " . $name . "你已成功註冊!!! <br/>";
    echo "帳號: " . $account . "<br>";
    echo "密碼: " . $password . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
    <head>
    </head>
    <body>
    <a href="index.php">首頁</a>
    <a href="user_list.php">會員清單</a>
    <a href="user_edit.php">會員修改</a>
    </body>
</html>