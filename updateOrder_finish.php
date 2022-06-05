<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
// print_r($_POST['product-name']);
// echo $_POST;
// echo $_POST['product-name'][1];
$id = $_POST['id'];
$sql1 = "SELECT * FROM `order` WHERE order_id = '$id';";
$result = mysqli_query($link, $sql1);
$row = mysqli_fetch_row($result);
$mname = $row[0];

$today = date('Y/m/d');
$totalprice = 0;
$sql2 = "SELECT * FROM `order` WHERE `order_id`='$id';";
$result2 = mysqli_query($link, $sql2); 
$row2 = mysqli_fetch_row($result2);
$t_price = $row2[2];

$sql3 = "DELETE FROM order_content WHERE order_id='$id'";
if(mysqli_query($link,$sql3))
{
    echo "刪除成功3";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
}
else
{
    echo '修改失敗!3';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}


for($i=0; $i<count($_POST['product-name']); $i++){
    $pname = $_POST['product-name'][$i];
    $quantity = $_POST['product-quantity'][$i];
    echo "商品名稱";
    echo $pname;
    echo "商品數量";
    echo $quantity;

    $sql4 = "SELECT * FROM `products` WHERE product_name = '$pname';";
    $result = mysqli_query($link, $sql4);
    $row = mysqli_fetch_row($result);
    $image = $row[1];
    $price = $row[4];

    $unitprice = $quantity * $price;
    echo "商品單價";
    echo $unitprice;
    $totalprice += $unitprice;
    echo "商品總價";
    echo $totalprice;

    if($id != null)
    {
        //order_content
        $sql5 = "insert into `order_content` (order_id, product_name, product_quantity, product_image, product_price, product_unitprice) 
        values ('$id', '$pname', '$quantity', '$image', '$price', '$unitprice');";
        
        if(mysqli_query($link,$sql5))
        {
            echo "新增成功5";
            echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
        }
        else
        {
            echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
        }

        
    }
    else
    {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
    }
}
$sql6 = "UPDATE `order` SET member_name='$mname', order_id='$id', order_totalprice='$totalprice',
        order_time ='$today' WHERE order_id='$id'";
if(mysqli_query($link,$sql6))
{
    echo "新增成功6";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
}
else
{
    echo "失敗";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}


$sql7 ="UPDATE member SET `order_amount`=`order_amount`- $t_price  
        WHERE `member_name`= ( SELECT member_name FROM `order` WHERE order_id = '$id');";
$sql8 = "UPDATE member SET `order_amount`=`order_amount` + $totalprice  
        WHERE `member_name`= ( SELECT member_name FROM `order` WHERE order_id = '$id');";
if(mysqli_query($link,$sql7))
{
    echo "新增成功7";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
}
else
{
    echo '新增失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}
if((mysqli_query($link,$sql8)))
{
    echo "新增成功8";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
}
else
{
    echo '新增失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}
