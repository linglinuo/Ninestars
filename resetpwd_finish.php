<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$pwd = $_POST['new_pwd'];
$email = $_SESSION['fgtpwd'];

$sql = "UPDATE `member` SET `member_password`='$pwd' WHERE `member_email`='$email';";
    if(mysqli_query($link,$sql))
    {
        echo '更新成功!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=first.php>';
    }
    else
    {
        echo '更新失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=resetpwd.php>';
    }
?>