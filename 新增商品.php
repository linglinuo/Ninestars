<?php session_start(); ?>
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
        if (isset($_POST['pname'])) {
        //上傳檔案
        $tmp_name = $_FILES['Myfile']['tmp_name'];
        $file_name = $_FILES['Myfile']['name'];
        $file_type = $_FILES['Myfile']['type'];
        $fp = fopen($tmp_name, "rb");
        $file = addslashes(fread($fp, filesize($tmp_name)));
        
        $id = $_POST['pid'];
        $name = $_POST['pname'];
        
        $array_category = array(1=>"御守","佛具","紀念品");
        $post_category = $_POST['pcategory'];
        $category = $array_category[$post_category];

        $price = $_POST['pprice'];
        $type = $_POST['ptype'];
        $intro = $_POST['pintro'];

        
        //寫入資料庫
        include("mysql_connect.inc.php");
        $sql = "insert into products(product_id,product_picture,product_name,product_categories,product_price,product_type,product_instruction)values('$id','img/portfolio/$file_name','$name','$category','$price','$type','$intro')";
        
        mysqli_query($link, $sql);
        mysqli_close($link);
        $msg = "<span style='color:#0000FF'>資料新增成功</span>";
        }
    ?>


  <style>
    .error {
      color: #D82424;
      font-weight: normal;
      font-family: "微軟正黑體";
      display: inline;
      padding: 1px;
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
          <li><a class="nav-link scrollto active" href="index.php">首頁</a></li>
          <li><a class="nav-link scrollto" href="index.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
                if($_SESSION["Name"] == 'admin')
                {
                  echo '<li><a class="nav-link scrollto" href="商品管理.php">管理中心</a></li>';
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
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>管理中心</h2>
          </div>
  
        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section id="store" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <!--左側-->
                <div class="col-3">
                    <table class="table table-bordered">
                        <tr>
                        <th><button id="product-manager"><a href="商品管理.php"><h4>商品管理</h4></button></th>
                        </tr>
                        <tr>
                        <th>
                          <button id="member-manager"><h4><a href="會員管理.php">會員管理</a></h4></button>
                        </th>
                        </tr>
                    </table>
                </div>
                <!--右側-->
                <div class="col-9">
                    <!--product table start-->
                    <div id="product-table">
                        <div class="row">
                            <div class="col-9">
                                <h2 style="text-align:left;">新增商品</h2>  
                            </div>
                        </div>

                        <form id="new-product" name="new-product" action="" method="POST" enctype="multipart/form-data"> 
                        <table id="table-product" class="table table-bordered">
                            <tr>
                                <th scope="row">商品編號</th>
                                <td><input type="text" name="pid"></td>
                            </tr>
                            <tr>
                                <th scope="row">商品圖片</th>
                                <td>
                                  <input type="hidden" name="MAX_FILE_SIZE" value="1024000">
                                  <input type="file" name="Myfile">
                                  <label for="Myfile" class="error"></label>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">商品名稱</th>
                                <td>
                                  <input type="text" name="pname">
                                  <label for="pname" class="error"></label>
                                </td> 
                            </tr>
                            <tr>
                                <th scope="row">分類</th>
                                <td>
                                  <input type="radio" name="pcategory" value="1" <?php if($_POST['pcategory']==1) echo"checked" ?>>御守<label for="input" class="pcategory"></label>
                                  <input type="radio" name="pcategory" value="2" <?php if($_POST['pcategory']==2) echo"checked" ?>>佛具<label for="input" class="pcategory"></label>
                                  <input type="radio" name="pcategory" value="3" <?php if($_POST['pcategory']==3) echo"checked" ?>>紀念品<label for="input" class="pcategory"></label>
                                </td>  
                            </tr>
                            <tr>
                                <th scope="row">價格</th>
                                <td>
                                  <input type="text" name="pprice">
                                  <label for="pprice" class="pcategory"></label>
                                </td>  
                            </tr>
                            <tr>
                                <th scope="row">種類</th>
                                <td>
                                  <input type="textarea" name="ptype">
                                  <label for="ptype" class="pcategory"></label>
                                </td>  
                            </tr>
                            <tr>
                                <th scope="row">敘述</th>
                                <td>
                                  <input type="textarea" name="pintro">
                                  <label for="pintro" class="pcategory"></label>
                                </td>  
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <input type="submit" value="確定上傳" /><br>
                                  <?php echo $msg ?>
                                </td>
                            </tr>
                        </table>
                        </form>
                        <!--product table end-->
                    </div>
                </div>
            </div>
        </div><!--container end-->
    </section><!-- End Portfolio Section -->
    


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
</body>

</html>