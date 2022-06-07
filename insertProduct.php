+<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include ("template.php");
    echo $top ;
    echo $vendorcss;
    echo $maincss;
    echo $sourcejs;
  ?>
    <?php 
    //新增資料庫
    if($_SESSION['Name'] == 'admin'){
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
        $sql = "insert into products(product_id, product_picture, product_name, product_categories, 
        product_price, product_type, product_instruction)values('$id','img/portfolio/$file_name','$name','$category','$price','<option>$type</option>','$intro')";

        if(mysqli_query($link,$sql))
        {
            echo "新增成功";
            echo '<meta http-equiv=REFRESH CONTENT=0;url=商品管理.php>';
        }
        else
        {
            echo '新增失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=商品管理.php>';
        }
    }
    }
    else
    {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';

    }
        
    ?>


  <style>
    .error {
      color: #D82424;
      font-weight: normal;
      font-family: "微軟正黑體";
      display: inline;
      padding: 5px;
    }
    .btn-new{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
      padding-top: 3px;
      padding-bottom: 3px;
      padding-left: 10px;
      padding-right: 10px;
    }
    .modal-backdrop {
      z-index: -1;
    }
    #myModal{
      z-index: 999;
    }
  </style>
</head>

<body>
  <?php
    include ("template.php");
    echo $pageloader ;
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-film mr-2"></i>
            絲扇淒神社
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">首頁</a></li>
          <li><a class="nav-link scrollto" href="index.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
                if($_SESSION["Name"] == 'admin')
                {
                  echo '<li><a class="nav-link scrollto active" href="商品管理.php">管理中心</a></li>';
                  echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                }
                else
                {
                  echo '<li><a class="nav-link scrollto" href="訂單管理.php">訂單查詢</a></li>';
                  echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                }
                } else {
                echo '<li><button class="getstarted button1" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>';
                }
            ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- navbar -->
    </div>
  </header><!--End Header -->
  <!--login-->
  <?php
  include ("login.php");
  ?>
  <!--login end-->
  <main id="main" style="margin-top: 20px;">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center mt-5">
            <h2>新增商品</h2>
          </div>
        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 justify-content-center text-center">
          <form id="insertProduct" enctype="multipart/form-data" method="post">
            <img src="img/insert.png">        
            <h5 class="mt-4">商品圖片<label for="Myfile" class="error"></label></h5>
            <input type="hidden" name="MAX_FILE_SIZE" value="1024000">
            <input type="file" name="Myfile">

            <h5 class="mt-4">商品名稱<label for="pname" class="error"></label></h5>            
            <input type="text" class="input form-control" name="pname">
              
            <h5 class="mt-4">分類<label for="pcategory" class="error"></label></h5>            
            <div class="level">
              <label class="radio-inline"><input type="radio" name="pcategory"  value="1">御守</label>
              <label class="radio-inline"><input type="radio" name="pcategory"  value="2">佛具</label>
              <label class="radio-inline"><input type="radio" name="pcategory"  value="3">紀念品</label>
            </div>

            <h5 class="mt-4">價格<label for="pprice" class="error"></label></h5>
            <input type="text" class="input form-control" name="pprice">
              
            <h5 class="mt-4">種類<label for="ptype" class="error"></label></h5>
            <input type="text" class="input form-control" name="ptype">

            <h5 class="mt-4">敘述<label for="pintro" class="error"></label></h5>
            <input type="text" class="input form-control" name="pintro">              
                
            <input type="submit" name="button" class="btn btn-new" id="sub_btn" value="新增">
          </form>
        </div>
      </div>
      
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include ("footer.html");
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php
  include ("template.php");
  echo $vendorjs ;
  echo $mainjs ;
  ?>
  <!--verify-->
  <?php
    include ("verify.html");
  ?>
  <!--verify end-->

  <script>
    $(document).ready(function($) {
    //for select
    $.validator.addMethod("notEqualsto", function(value, element, arg) {
        return arg != value;
    }, "您尚未選擇!");

    $("#insertProduct").validate({
          submitHandler: function(form) {
          //alert("success!");
          form.submit();
        },
        rules: {
          Myfile: {
            required: true
          },
          pname: {
            required: true,
          },
          pprice: {
            required: true,
          },
          ptype: {
            required: true,
          },
          pintro: {
            required: true
          },
            //checkbox若使用相同名稱
          "pcategory": {
            required: true,
          }
        },
        messages: {
          Myfile: {
            required: "必填"
          },
          pname: {
            required: "必填"
          },
          pprice: {
            required: "必填"
          },
          ptype: {
            required: "必填"
          },
          pintro: {
            required: "必填"
          },
            //checkbox若使用相同名稱
          "pcategory": {
            required: "必填"
          }
        }
    });
  });
  </script>
</body>

</html>