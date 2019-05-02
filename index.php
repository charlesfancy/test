<html>
    <title>會員管理系統</title>
    <head>
    <script>
    function check_date()
    {
    if(document.myForm.account.value.lengthh == 0)
        alert("帳號欄位不可空白！");
    elseif(document.myForm.password.value.length == 0)
        alert("密碼欄位不可空白！");
    else
        myForm.submit();
    }
    </script>
    </head>
<body>

<?php
ini_set('display_errors', 1);
$servername = "mysql";
$username = "root";
$password = "root";
$db = 'test';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}else{
echo "DB Connection Successfully" . '<br />';
}
?>

<form action="checkpwd.php" method="post" name="myForm">
    <table width="40%" align="center">
        <tr>
            <td align="center">
                <font color="#3333FF">帳號：</font>
                <input name="account" type="text" size="15">
            </td>
        </tr>
        <tr>
            <td align="center">
                <font color="#3333FF">密碼：</font>
                <input name="password" type="text" size="15">
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit"value="登入"onClick="check_date()">    
                <input type="reset"value="重填">
            </td>
        </tr>
    </table>
</form>
<p align="center">
    <a href="insert_1.php">加入會員</a>
    <a href="user_list.php">會員清單</a>
    <a href="user_edit.php">會員修改</a>

</body>


</html>



