<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$today = date('Y/m/d');
$name = $_POST['member_name'];
$message = $_POST['wish_content'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($name != null && $message != null)
{
        //新增資料進資料庫語法
        $sql = "insert into wish (member_name, wish_content, wish_time) values ('$name', '$message', '$today')";
        if(mysqli_query($link,$sql))
        {
            echo '新增成功';    
            echo '<meta http-equiv=REFRESH CONTENT=0;url=許願池管理.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=許願池.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
}
?>