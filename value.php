<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
print_r($_POST['quantity']);
//echo $_POST;
//echo $id;
//echo count($_POST['name']);
$today = date('Y/m/d');
$name=$_SESSION['Name'];
$sql1="SELECT * FROM `order`  ORDER BY order_id DESC LIMIT 0 , 1";
$result = mysqli_query($link,$sql1);
$row = mysqli_fetch_row($result);
$id = $row[1]+1;
for($i=0;$i<count($_POST['product_name']);$i++)
{
    $product=$_POST['product_name'][$i];
    $quantity=$_POST['quantity'][$i];
    $image=$_POST['image'][$i];
    $price=$_POST['price'][$i];
    $unit=$_POST['unit'][$i];

    $sql = "insert into  order_content (order_id, product_name, product_quantity, product_image, product_price, product_unitprice) values ('$id', '$product', '$quantity','$image','$price','$unit')";
        if(mysqli_query($link,$sql))
        {
                echo $sql;
                echo '成功1';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=訂單管理.php>';
        }
        else
        {
                echo '新增失敗!1';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=商品頁.php>';
        }

};
$total=$_POST['total'];
$sql2 = "insert into `order` (member_name, order_id, order_totalprice, order_time) values ('$name', '$id', '$total','$today')";
        if(mysqli_query($link,$sql2))
        {
                echo '成功2';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=訂單管理.php>';
        }
        else
        {
                echo '新增失敗!2';
        }
$sql3 = "UPDATE `member` SET `order_amount`=`order_amount`+$total WHERE `member_name`='$name'";
        if(mysqli_query($link,$sql3))
        {
                echo '成功3';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=訂單管理.php>';
        }
        else
        {
                echo '新增失敗!3';
        }


?>