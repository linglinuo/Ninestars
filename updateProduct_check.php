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
    $data='';
    include("mysql_connect.inc.php");
    $name = $_POST['name'];

    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM products WHERE product_name='$name';")) {
    while ($row = mysqli_fetch_assoc($result)) {
    $data .= "
    <form id=\"updateProduct\" name=\"form\" method=\"post\" action=\"updateProduct_finish.php\">
      <h5 class=\"mt-4\">商品圖片</h5>
        <img src=\"$row[product_picture]\" width=\"200px\">
      <h5 class=\"mt-4\">商品名稱<label for=\"p-name\" class=\"error\"></label></h5>
        <input type=\"text\" class=\"input form-control\" name=\"p-name\" value=\"$row[product_name]\"><br>
      <h5 class=\"mt-4\">商品分類<label for=\"p-categories\" class=\"error\"></label></h5>  
        <input type=\"text\" class=\"input form-control\" name=\"p-categories\" value=\"$row[product_categories]\"><br>
      <h5 class=\"mt-4\">商品單價<label for=\"p-price\" class=\"error\"></label></h5>
        <input type=\"text\" class=\"input form-control\" name=\"p-price\" value=\"$row[product_price]\"><br>
      <h5 class=\"mt-4\">商品種類<label for=\"p-type\" class=\"error\"></label></h5>
        <input type=\"text\" class=\"input form-control\" name=\"p-type\" value=\"$row[product_type]\"><br>
      <h5 class=\"mt-4\">商品敘述<label for=\"p-instruction\" class=\"error\"></label></h5>
        <input type=\"text\" class=\"input form-control\" name=\"p-instruction\" value=\"$row[product_instruction]\"><br>
      <input type=\"submit\" name=\"button\" class=\"btn btn-new\" id=\"sub_btn\" value=\"確認\">
    </form>";
    }
    mysqli_free_result($result); // 釋放佔用的記憶體
    }
    mysqli_close($link); // 關閉資料庫連結
  ?>

  <style>
    .error {
      color: #D82424;
      font-weight: normal;
      font-family: "微軟正黑體";
      display: inline;
      padding: 5px;
    }
    .new-product{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
      padding-top: 3px;
      padding-bottom: 3px;
      padding-left: 10px;
      padding-right: 10px;
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
          <li><a class="nav-link scrollto" href="pray.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="fortune.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="wish.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
                if($_SESSION["Name"] == 'admin')
                {
                  echo '<li><a class="nav-link scrollto  active" href="manageProduct.php">管理中心</a></li>';
                  echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                }
                else
                {
                  echo '<li><a class="nav-link scrollto" href="manageOrder.php">訂單查詢</a></li>';
                  echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                }
                } else {
                echo '<li><button class="getstarted button1" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>';
                }
            ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
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
            <h2>修改商品</h2>
          </div>
        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-sm-6 justify-content-center text-center">
            <img src="img/update.png">
            <?php echo $data;?>
          </div>
        </div>
      </div>
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

  <script>
  $(document).ready(function($) {
    $("#updateProduct").validate({
          submitHandler: function(form) {
          //alert("success!");
          form.submit();
        },
        rules: {
          "p-name": {
            required: true
          },
          "p-categories": {
            required: true
          },
          "p-price": {
            required: true
          },
          "p-type": {
            required: true
          },
          "p-instruction": {
            required: true
          }
        },
        messages: {
          "p-name": {
            required: "必填"
          },
          "p-categories": {
            required: "必填"
          },
          "p-price": {
            required: "必填"
          },
          "p-type": {
            required: "必填"
          },
          "p-instruction": {
            required: "必填"
          }
        }
    });
  });
  </script>

</body>

</html>

