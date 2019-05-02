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

        $account = $row['account'];
        $name = $row['name'];
        $year = $row['year'];
        $month = $row['month'];
        $day = $row['day'];
        $phone = $row['phone'];
        $email = $row['email'];


    }
}
?>

<html>
    <title></title>
    <head>
        
    </head>
    <body>
        
    <form action="update.php" method="post" name="myForm">
        <table border="2" align="cenert" bordercolor="">
            <tr>
                <td colspan="2" bgcolor="" align="cenet"
                <font color="#FFFFFF"> 請填下列資料 （標示＊欄位請務必填寫）</font>
                </td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊使用者帳號：</td>
                <td><?php echo htmlspecialchars($account);?></td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊使用者密碼：</td>
                <td><input name="password" type="password" size="15">(請使用英文或數字)</td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊密碼確認：</td>
                <td><input name="re_password" type="password" size="15"/>(請使用英文或數字)</td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊姓名：</td>
                <td><input name="name" type="text" size="8" value="<?php echo htmlspecialchars($name);?>" /></td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊性別：</td>
                <td>
                    <input type="radio" name="sex" value="男" checked>男
                    <input type="radio" name="sex" value="女">女
                </td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊生日：</td>
                <td>民國
                <input name="year" type="TEXT"size="6" value="<?php echo htmlspecialchars($year);?>" />年
                <input name="month" type="TEXT"size="4" value="<?php echo htmlspecialchars($month);?>" />月
                <input name="day" type="TEXT"size="4" value="<?php echo htmlspecialchars($day);?>" />日
                </td>
            </tr>
            <tr bgcolor="">
                <td align="right">電話：</td>
                <td><input name="phone" type="text" size="20" value="<?php echo htmlspecialchars($phone);?>" /></td>
            </tr>
            <tr bgcolor="">
                <td align="right">Email：</td>
                <td><input name="email" type="text" size="40" value="<?php echo htmlspecialchars($email);?>" /></td>
            </tr>
            <tr bgcolor="">
                <td align="right">備註：</td>
                <td><textarea name="comment" cols="45" rows="4"></textarea></td>
            </tr>
            <tr>
            <td align="center" colspan="2">
                <input type="submit" value="送出" name="Submit">    
                <input type="reset"value="重填">
            </td>
        </tr>


    </body>
</html>    