<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if(isset($_POST['p-name']))
{
    $name = $_POST['p-name'];
    $categories = $_POST['p-categories'];
    $price = $_POST['p-price'];
    $type = $_POST['p-type'];
    $instruction = $_POST['p-instruction'];


    include("mysql_connect.inc.php");
    //新增資料進資料庫語法
    $sql = "UPDATE products SET product_categories='$categories', product_price='$price', 
    product_type='<option>$type</option>', product_instruction='$instruction' WHERE product_name='$name';";
        
    if(mysqli_query($link,$sql))
    {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=manageProduct.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=updateProduct.php>';
    }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
}
?>