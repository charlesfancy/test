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
$password1 = $_POST["password"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}else{
echo "DB Connection Successfully" . '<br />';
}
$sql="SELECT * FROM `users` WHERE `account` = '$account' AND `password` = '$password1' LIMIT 0,1000";

// $sql="SELECT * FORM users Where 'account' ='$account' AND 'password' = '$password1'";
$result = $conn->query($sql);
// $result = execute_sql("test",$sql,$conn);
echo "帳號: " . $account . "密碼: " . $password1 . "<br>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Phone" . $row["phone"]. "<br>";

        setcookie("id",$row["id"],time()+3600);
        setcookie("account",$row["account"],time()+3600);
        setcookie("passed","TURE",time()+3600);
    
    }}else{
        echo "帳號密碼錯誤，請查明後在登入!";
    }

// if($result = 0)
// {
//     // mysql_free_result($result);

//     // mysql_close($conn);
//     echo "帳號密碼錯誤，請查明後在登入";
// }else
// {
//     $id = mysql_result($result,0,"id");
//     mysql_free_result($result);
//     mysql_close($conn);
//     setcookie("id",$id);
//     setcookie("passed","TURE");
    
// }
header("refresh:5;url=http://test.test/user_main.php");
?>
