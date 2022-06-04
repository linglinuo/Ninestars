<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include("mysql_connect.inc.php");
$name = $_POST['name1'];
$pwd = $_POST['pwd1'];
$sql = "SELECT * FROM member where member_name = '$name'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($row[0] == $name && $row[2] == $pwd)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['Name'] = $name;
        echo '<meta http-equiv=REFRESH CONTENT=0;url=first.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=first.php>';
}
?>