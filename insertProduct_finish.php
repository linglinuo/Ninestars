<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
    //新增資料庫
        if (isset($_POST['pname'])) {
        //上傳檔案
        $tmp_name = $_FILES['Myfile']['tmp_name'];
        $file_name = $_FILES['Myfile']['name'];
        $file_type = $_FILES['Myfile']['type'];
        $fp = fopen($tmp_name, "rb");
        $file = addslashes(fread($fp, filesize($tmp_name)));
        
        include("mysql_connect.inc.php");
        $sql1 = "SELECT * FROM products ORDER BY product_id DESC LIMIT 0, 1";
        $result = mysqli_query($link, $sql1);
        $row = mysqli_fetch_row($result);
        $id = $row[0]+1;

        $name = $_POST['pname'];
        
        $array_category = array(1=>"御守","佛具","紀念品");
        $post_category = $_POST['pcategory'];
        $category = $array_category[$post_category];

        $price = $_POST['pprice'];
        $type = $_POST['ptype'];
        $intro = $_POST['pintro'];

        
        //寫入資料庫
        include("mysql_connect.inc.php");
        $sql = "insert into products(product_id, product_picture, product_name, product_categories, product_price, product_type, product_instruction)values('$id','img/portfolio/$file_name','$name','$category','$price','<option>$type</option>','$intro')";
        
        mysqli_query($link, $sql);
        mysqli_close($link);
        $msg = "<span style='color:#0000FF'>資料新增成功</span>";
        }
    ?>
