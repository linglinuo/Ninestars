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
        $sql = "UPDATE `member` SET `order_amount`=`order_amount`-$data 
        WHERE `member_name`= ( SELECT member_name FROM `order` WHERE order_id = ".$_GET['order'].");";
        $sql2 = "delete from group_22.order where `order_id` = ".$_GET['order'].";";
        $sql3 = "delete from group_22.order_content where `order_id` = ".$_GET['order'].";";
        
        if(mysqli_query($link,$sql))
        {
                echo '刪除成功!';
                if($_SESSION['Name'] == 'admin')
                {
                   echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
                }
                else
                {
                   echo '<meta http-equiv=REFRESH CONTENT=2;url=訂單管理.php>';
                }
        }
        else
        {
                echo '刪除失敗!';
        }

        if(mysqli_query($link,$sql2)&& mysqli_query($link,$sql3))
        {
                if($_SESSION['Name'] == 'admin')
                {
                   echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
                }
                else{
                   echo '<meta http-equiv=REFRESH CONTENT=2;url=訂單管理.php>';
                }
        }
        else
        {
                echo '刪除失敗!';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>