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
          <h2 style="text-align:left;">商品細節</h2>
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
                <img src="img/portfolio/c2.png" alt="">   
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <span class="name">佛珠</span>
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
                        <option>綠色</option>
                        <option>粉色</option>
                        <option>藍色</option>
                      </select>
                    </div>
                  </div>
                </div>
              </ul>
              <a class="addcart">加入購物車</a>
            </div>
            <div class="portfolio-description">
              <p>
                此款佛珠自古以來即被視為避邪之聖物，其蘊藏著豐富的天然靈氣，有助於消除壓力、疲勞、濁氣等負面能量，也是友善、愛心以及希望的象徵。 無論是靜思冥想、唸經數珠時使用，或是隨身攜帶、掛置車上、家中神明配戴，都很合適，不僅十分漂亮還可以招來好福氣喔！
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