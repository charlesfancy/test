<?php
include('mysql_connect.php');

$now_id = $_COOKIE["id"];


$account = $_COOKIE["account"];
$now_name = $_COOKIE["name"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$phone = $_POST["phone"];
$email = $_POST["email"];

// $sql1="SELECT * FROM user Where account='$account'";
$sql = "UPDATE `users` SET  `name` = '$name',`year` = '$year',`month` = '$month',`day` = '$day',`phone` = '$phone',`email` = '$email' WHERE `id` = '$now_id'";
// $sql = "UPDATE `users` SET `name` = 'BBB',`password` = 'BBB' WHERE `id` = '$now_id'";


// $sql = "INSERT INTO users (account, password, name, sex, year, month, day, phone, email, comment)
// VALUES ('$account', '$password', '$name', '$sex', '$year', '$month', '$day', '$phone', '$email', '$comment')";
// $result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
    echo "HI~ " . $name . "你已成功修改!!! <br/>";
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