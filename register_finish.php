<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pwd != null)
{
        //新增資料進資料庫語法
        $sql = "insert into member (member_name, member_email, member_password, member_level, order_amount) values ('$id', '$email', '$pwd', '初級', '0')";
        if(mysqli_query($link,$sql))
        {
                echo '<meta http-equiv=REFRESH CONTENT=0;url=first.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
        }
}
else
{
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}
?>