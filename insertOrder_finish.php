<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
print_r($_POST['product-name']);
echo $_POST;
echo $_POST['product-name'][1];

$sql1 = "SELECT * FROM `order` ORDER BY order_id DESC LIMIT 0, 1";
$result = mysqli_query($link, $sql1);
$row = mysqli_fetch_row($result);
$id = $row[1]+1;

$mname = $_POST['member_name'];

$today = date('Y/m/d');

for($i=0; $i<count($_POST['p-name']); $i++){
    $pname = $_POST['p-name'][$i];
    $quantity = $_POST['p-quantity'][$i];

    $sql2 = "SELECT * FROM `products` WHERE product_name = '$pname';";
    $result = mysqli_query($link, $sql2);
    $row = mysqli_fetch_row($result);
    $image = $row[1];
    $price = $row[4];

    $unitprice = $quantity * $price;

    $totalprice += $unitprice;

    if($mname != null)
    {
        //新增資料進資料庫語法
        $sql3 = "insert into order_content (order_id, product_name, product_quantity, product_image, product_price, product_unitprice) 
        values ('$id', '$pname', '$quantity', '$image', '$price', '$unitprice')";
        $sql4 = "insert into `order` (member_name, order_id, order_totalprice, order_time) 
        values ('$mname', '$id', '$totalprice', '$today')";
        if(mysqli_query($link,$sql3) && mysqli_query($link,$sql4))
        {
            echo "新增成功";
            echo '<meta http-equiv=REFRESH CONTENT=2;url=orderForManager.php>';
        }
        else
        {
            echo '新增失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
        }
    }
    else
    {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=first.php>';
    }
}
