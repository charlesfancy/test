

<html>
    <title></title>
    <head>
        
    </head>
    <body>
    <form action="insert.php" method="post" name="myForm">
        <table border="2" align="cenert" bordercolor="">
            <tr>
                <td colspan="2" bgcolor="" align="cenet"
                <font color="#FFFFFF"> 請填下列資料 （標示＊欄位請務必填寫）</font>
                </td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊使用者帳號：</td>
                <td><input name="account" type="text" size="15">(請使用英文或數字)</td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊使用者密碼：</td>
                <td><input name="password" type="password" size="15">(請使用英文或數字)</td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊密碼確認：</td>
                <td><input name="re_password" type="password" size="15">(請使用英文或數字)</td>
            </tr>
            <tr bgcolor="">
                <td align="right">＊姓名：</td>
                <td><input name="name" type="text" size="8"></td>
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
                <td>西元
                <input name="year" type="TEXT"size="4">年
                <input name="month" type="TEXT"size="2">月
                <input name="day" type="TEXT"size="2">日
                </td>
            </tr>
            <tr bgcolor="">
                <td align="right">電話：</td>
                <td><input name="phone" type="text" size="20"></td>
            </tr>
            <tr bgcolor="">
                <td align="right">Email：</td>
                <td><input name="email" type="text" size="40"></td>
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