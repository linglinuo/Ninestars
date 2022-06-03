<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$name=$_SESSION['Name'];
$result = mysqli_query($link, "SELECT * FROM `order` where `order_id` = ".$_GET['order'].";");
while ($row = mysqli_fetch_assoc($result)) {
        $data = "$row[order_totalprice]";
      }
if($_SESSION['Name'] != null)
{
        //刪除資料庫資料語法
        $sql = "delete from group_22.order where `order_id` = ".$_GET['order'].";";
        $sql2 = "delete from group_22.order_content where `order_id` = ".$_GET['order'].";";
        $sql3 = "UPDATE `member` SET `order_amount`=`order_amount`-$data WHERE `member_name`='$name';";
        if(mysqli_query($link,$sql)&& mysqli_query($link,$sql2)&& mysqli_query($link,$sql3))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=訂單管理.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo $sql;
                echo $sql2;
                echo $sql3;
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>