<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
// print_r($_POST['product-name']);
// echo $_POST;
// echo $_POST['product-name'][1];

$sql1 = "SELECT * FROM `order` ORDER BY order_id DESC LIMIT 0, 1";
$result = mysqli_query($link, $sql1);
$row = mysqli_fetch_row($result);
$id = $row[1]+1;
echo $id;


$name=$_SESSION['Name'];

$today = date('Y/m/d');
$totalprice = 0;
for($i=0; $i<count($_POST['product-name']); $i++){
    $pname = $_POST['product-name'][$i];
    $quantity = $_POST['product-quantity'][$i];

    $sql2 = "SELECT * FROM `products` WHERE product_name = '$pname';";
    $result = mysqli_query($link, $sql2);
    $row = mysqli_fetch_row($result);
    $image = $row[1];
    $price = $row[4];

    $unitprice = $quantity * $price;

    echo $unitprice;
    $totalprice += $unitprice;
    echo $totalprice;

    if($name == 'admin')
    {
        //新增資料進資料庫語法
        $sql3 = "insert into order_content (order_id, product_name, product_quantity, product_image, product_price, product_unitprice) 
        values ('$id', '$pname', '$quantity', '$image', '$price', '$unitprice')";
        if(mysqli_query($link,$sql3))
        {
            echo "新增成功";
            //echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
        }
        else
        {
            echo '新增失敗!';
            //echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
        }
    }
    else
    {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=plslogin.php>';
    }
}
$mname = $_POST['m_name'];
$sql4 = "insert into `order` (member_name, order_id, order_totalprice, order_time) 
        values ('$mname', '$id', '$totalprice', '$today')";
if(mysqli_query($link,$sql4))
{
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
}
else
{
    echo '新增失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}

$sql5 ="UPDATE member SET `order_amount`=`order_amount`+ $totalprice 
        WHERE `member_name`= ( SELECT member_name FROM `order` WHERE order_id = '$id');";
if(mysqli_query($link,$sql5))
{
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
}
else
{
    echo '新增失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
}