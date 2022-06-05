<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$name = $_POST['p-name'];

if($_SESSION['Name'] != null)
{
        //刪除資料庫資料語法
        $sql = "delete from group_22.products where product_name='$name';";
        if(mysqli_query($link,$sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=商品管理.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=deleteProduct.php>';
        }
}
else
{
        echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
}
?>