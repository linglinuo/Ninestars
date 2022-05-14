<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include ("template.php");
    echo $top ;
    echo $vendorcss;
    echo $maincss;
    echo $extrajs;
    echo $sourcejs;
  ?>
  <!--商品-->
  <?php
  include("mysql_connect.inc.php");
  
  // 送出查詢的SQL指令
  if ($result = mysqli_query($link, "SELECT * FROM `products` WHERE `product_id`=".$_GET['id'])) {
  while ($row = mysqli_fetch_assoc($result)) {
    $data .= "
    <!-- ======= Portfolio Details Section ======= -->
    <section id=\"portfolio-details\" class=\"portfolio-details\">
        <div class=\"container\">

            <div class=\"row gy-4\">

            <div class=\"col-lg-8\">
                <div class=\"portfolio-details-slider swiper\">
                <div class=\"swiper-wrapper align-items-center\">
                    <img src=\"$row[product_picture]\" alt=\"\">
                </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"portfolio-info\">
                <span class=\"name\">$row[product_name]</span>
                <ul>
                    <div class=\"container\" style=\"padding-left: 0px;padding-right: 0px;padding-left: 0px;\">
                    <div class=\"row mt-3\">
                        <div class=\"col-6\">
                        <span class=\"detail\"><strong>分類: </strong>$row[product_categories]</span>
                        </div>
                        <div class=\"col-6\">
                        <span class=\"detail\"><strong>價錢: </strong>$$row[product_price]</span>
                        </div>
                    </div>
                    </div>
                </ul>
                <button class=\"btn numbutton my-cart-btn\" data-id=\"$row[product_id]\" data-name=\"$row[product_name]\" data-price=\"$row[product_price]\" data-quantity=\"1\" data-image=\"$row[product_picture]\" style=\"margin-top: 0px;\">加入購物車</button>
                </div>
                <div class=\"portfolio-description\">
                <p>
                    $row[product_instruction]
                </p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Details Section -->
    ";
    }
    mysqli_free_result($result); // 釋放佔用的記憶體
    }
    mysqli_close($link); // 關閉資料庫連結
?>
<!--商品結束-->

  <style>
    .name{
      font-size: 25px;
      font-weight: bolder;
    }
    .detail{
      margin-top: 30px;
      font-size: 20px;
    }
    .addcart{
      background-color: #eb5d1e;
      color: #fef8f5;
      font-size: 20px;
      border-radius: 10px;
      padding-top: 3px;
      padding-bottom: 3px;
      padding-left: 10px;
      padding-right: 10px;
      margin-top: 50px;
    }
    .numbutton{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
    }
    .error {
            color: #D82424;
            font-weight: normal;
            font-family: "微軟正黑體";
            display: inline;
            padding: 1px;
        }
    .badge-notify{
      background:red;
      position:relative;
      top: -20px;
      right: 10px;
    }
    .modal-backdrop {
      z-index: -1;
    }
    .test{
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
          <li><a class="nav-link scrollto" href="first.php">介紹</a></li>
          <li><a class="nav-link scrollto active" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.php">許願池</a></li>
          <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fas fa-shopping-cart my-cart-icon"></i>
              <span class="badge badge-notify my-cart-badge"></span></a></li>
          <li>
          <?php
            if (isset($_SESSION['Name'])) {
                echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                } else {
                echo '<li><button class="getstarted button1" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>';
                }
            ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- navbar -->
    </div>
  </header><!-- End Header -->
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
          <h2 style="text-align: left;">商品細節</h2>
        </div>
      </div>
    </section><!-- Breadcrumbs Section -->

    <?php echo $data;?><!--商品-->

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
  <!--mycart-->
  <?php
    include ("mycart.php");
  ?>
  <!--mycart end-->
</body>

</html>