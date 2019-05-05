<?php
include('mysql_connect.php');


$account = $_POST["account"];
$password = $_POST["password"];
$password = $_POST["password"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$comment = $_POST["comment"];


$con = mysqli_connect("mysql", "root", "root", "test");
// $sql1="SELECT * FROM user Where account='$account'";
$sql = "SELECT * FROM `users` WHERE `account` = '$account' LIMIT 0,1000;";

$result = $conn->query($sql);
if ($result->num_rows != 0) {
    echo "此帳號已被註冊！";
} else {
    echo "註冊ing...";

    $sql = "INSERT INTO users (account, password, name, sex, year, month, day, phone, email, comment)
VALUES ('$account', '$password', '$name', '$sex', '$year', '$month', '$day', '$phone', '$email', '$comment')";
    // $result = $conn->query($sql);


    if ($conn->query($sql) === TRUE) {
        echo "Hi~ " . $name . "你已成功註冊!!! <br/>";
        echo "帳號: " . $account . "<br>";
        echo "密碼: " . $password . "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<html>

<head>
</head>

<body>
    <a href="index.php">首頁</a>
    <a href="user_list.php">會員清單</a>
    <a href="user_main2.php">會員資訊</a>
    <a href="user_edit.php">會員修改</a>
    <a href="user_delete.php">會員資訊刪除</a>
</body>

</html>