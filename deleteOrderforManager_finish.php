<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$id = $_POST['order_id'];

if($_SESSION['Name'] != null)
{
        //刪除資料庫資料語法
        $sql = "delete from group_22.`order` where order_id='$id';";
        $sql1= "delete from group_22.`order_content` where order_id='$id';";
        if(mysqli_query($link,$sql) && mysqli_query($link,$sql1))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>