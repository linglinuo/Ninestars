<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$name = $_POST['m-name'];
$email = $_POST['m-email'];
$pwd = $_POST['m-pwd'];
$level = $_POST['m-level'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($name != null && $pwd != null)
{
        //新增資料進資料庫語法
        $sql = "UPDATE member SET member_email='$email', member_password='$pwd', member_level='$level' WHERE member_name='$name';";
        
        if(mysqli_query($link,$sql))
        {
            echo "修改成功";
            echo '<meta http-equiv=REFRESH CONTENT=2;url=會員管理.php>';
        }
        else
        {
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}
?>