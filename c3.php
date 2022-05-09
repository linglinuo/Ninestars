<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>絲扇淒神社</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/templatemo-style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!--additional method - for checkbox .. ,require_from_group method ...-->
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<!--中文錯誤訊息-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
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
        <a class="navbar-brand" href="first.php">
            <i class="fas fa-film mr-2"></i>
            絲扇淒神社
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">首頁</a></li>
          <li><a class="nav-link scrollto" href="first.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.php">許願池</a></li>
          <li><a class="nav-link scrollto" href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          <li><button class="getstarted button1" onclick="document.getElementById('id01').style.display='block'" style="width: 125px; padding-top: 7px;">登入/註冊</button></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<!--login-->
<?php
include ("login.html");
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

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <img src="img/portfolio/c3.png" alt="">   
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <span class="name">御守護太刀守</span>
              <ul>
                <div class="container" style="padding-left: 0px;padding-right: 0px;padding-left: 0px;">
                  <div class="row mt-3">
                    <div class="col-6">
                      <span class="detail"><strong>分類</strong>: 紀念品</span>
                    </div>
                    <div class="col-6">
                      <span class="detail"><strong>價錢</strong>: $650</span>
                    </div>
                  </div>

                  <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-6 ">
                      <span class="detail"><strong>數量</strong></span>
                    </div>
                    <div class="col-6">
                      <button id="minus" class="btn numbutton"> - </button>
                      <span id="num">1</span>
                      <button id="plus" class="btn numbutton"> + </button>  
                    </div>
                  </div>
                  <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-6 align-items-center">
                      <span class="detail"><strong>種類</strong></span>
                    </div>
                    <div class="col-6 align-items-center">
                      <select name="color">
                        <option>金色</option>
                      </select>
                    </div>
                  </div>
                </div>
              </ul>
              <a class="addcart">加入購物車</a>
            </div>
            <div class="portfolio-description">
              <p>
                祀奉初代將軍德川家康的日光東照宮，寺境內的寶物館中，擁有2,000件藏品，其中兩把被列為國寶的太刀「銘助真」與「銘国宗」，尤其具有代表性。雖然這些寶物只能隔著櫥窗欣賞，但旅人們卻能夠把金色太刀造型的「御守護太刀守」買回家珍藏，當成擺設超有氣勢！
            </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

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
  <script>
    $(function () {
      var x=1;
      $("#plus").click(function(){
        x++;
        document.getElementById("num").innerHTML = x;
        if(x<=0){
            document.getElementById("num").innerHTML = 0;
        }
      });
      $("#minus").click(function(){
        x--;
        document.getElementById("num").innerHTML = x;
        if(x<=0){
            document.getElementById("num").innerHTML = 0;
        }
      });
    });
  </script>
  <!--verify-->
<?php
  include ("verify.html");
  ?>
<!--verify end-->
</body>

</html>