<?php

ini_set('display_errors', 1);
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "test";

// function execute_sql($database,$sql,$conn)
// {
//     $de_select =mysql_select_db($database,$conn)
//         or die("開啟資料庫失敗".mysql_error($conn));
//     $result = mysql_query($sql,$conn);
//     return $result;
// }

// 取得表單資料
$account = $_POST["account"];
$password = $_POST["password"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="SELECT * FORM users Where account ='$account' AND password = '$password'";
$result = $conn->query($sql);
// $result = execute_sql("test",$sql,$conn);

if ($result->num_rows == 0)
{
    // mysql_free_result($result);

    // mysql_close($conn);
    echo "帳號密碼錯誤，請查明後在登入";
}else
{
    $id = mysql_result($result,0,"id");
    mysql_free_result($result);
    mysql_close($conn);
    setcookie("id",$id);
    setcookie("passed","TURE");
    
}

?>
