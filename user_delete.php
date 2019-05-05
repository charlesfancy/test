<?php
include('mysql_connect.php');


$now_id = $_COOKIE["id"];


$passed = $_COOKIE["passed"];

if ($passed != TRUE) {
    header("location:index.php");
    exit();
} else {
    $id = $_COOKIE["id"];

    $sql = "DELETE FROM users WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "你已成功刪除!!! <br/>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
    }
}




// $sql = "UPDATE `users` SET  `name` = '$name',`year` = '$year',`month` = '$month',`day` = '$day',`phone` = '$phone',`email` = '$email' WHERE `id` = '$now_id'";
// $sql = "UPDATE `users` SET `name` = 'BBB',`password` = 'BBB' WHERE `id` = '$now_id'";


// $sql = "INSERT INTO users (account, password, name, sex, year, month, day, phone, email, comment)
// VALUES ('$account', '$password', '$name', '$sex', '$year', '$month', '$day', '$phone', '$email', '$comment')";
// $result = $conn->query($sql);





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