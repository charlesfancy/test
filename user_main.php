<?
include('mysql_connect.php');


$now_user_id = $_COOKIE["id"];
$now_user_account = $_COOKIE["account"];

$sql = "SELECT * FROM `users` WHERE `id` = '$now_user_id' ";

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
