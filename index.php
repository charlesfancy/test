<?php
    include('mysql_connect.php');
    echo 'AAA';
?>

<html>
    <title>會員管理系統</title>
    <head>
    <script>
        window.onload = () => {
            const btn = document.getElementById('btnSubmit');
        
            btn.addEventListener('click', e => {
                e.preventDefault();
                const account = document.getElementById('account');
                const password = document.getElementById('password');

                if(account.value.length == 0) {
                    alert("帳號欄位不可空白！");
                } else if(password.value.length == 0) {
                    alert("密碼欄位不可空白！");
                } else {
                    myForm.submit();
                }
            });
        }
    </script>
    </head>
<body>
<form action="checkpwd.php" method="post" name="myForm">
    <table width="40%" align="center">
        <tr>
            <td align="center">
                <span style="color: #3333FF">帳號：</span>
                <input id="account" name="account" type="text" size="15">
            </td>
        </tr>
        <tr>
            <td align="center">
                <span style="color: #3333FF">密碼：</span>
                <input id="password" name="password" type="text" size="15">
            </td>
        </tr>
        <tr>
            <td align="center">
                <input id="btnSubmit" type="submit" value="登入">    
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



