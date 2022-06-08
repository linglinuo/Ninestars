<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$id = $_POST['id3'];

if($_SESSION['Name'] != null)
{
        //刪除資料庫資料語法
        $sql = "delete from group_22.member where member_name='$id';";
        $sql1= "delete from group_22.wish where member_name='$id';";
        $sql2= "delete from group_22.order where member_name='$id';";
        if(mysqli_query($link,$sql) && mysqli_query($link,$sql1) && mysqli_query($link,$sql2))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=manageMember.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
        }
}
else
{
        echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
}
?>