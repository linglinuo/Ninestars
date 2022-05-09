<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include ("template.php");
        echo $top ;
        echo $extracss;
        echo $maincss;
    ?>
    <style>
        .error 
        {
            color: #D82424;
            font-weight: normal;
            font-family: "微軟正黑體";
            display: inline;
            padding: 1px;
        }
    </style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!--additional method - for checkbox .. ,require_from_group method ...-->
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<!--中文錯誤訊息-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
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
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto active" href="解籤1.php">解籤</a></li>
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

    <div class="tm-hero d-flex justify-content-center align-items-center mt-5" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input text-left" type="search" placeholder="Search" aria-label="Search" style="margin-top: 0px;">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary text-left">第一支籤</h2>
        </div>
        <div class="row tm-mb-90">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <img src="http://www.chance.org.tw/%E7%B1%A4%E8%A9%A9%E9%9B%86/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4%E6%8E%83%E6%8F%8F%E5%9C%96%E7%89%87/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4001a.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <img src="http://www.chance.org.tw/%E7%B1%A4%E8%A9%A9%E9%9B%86/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4%E6%8E%83%E6%8F%8F%E5%9C%96%E7%89%87/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4001b.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <h2 class="text-center tm-text-gray-dark mb-4"><b>大吉</b></h2>
                    <div class="mb-4">
                        <h5 class="text-center tm-text-gray-dark">七寶浮圖塔</h6>
                        <h6 class="text-center tm-text-gray">就像出現了用美麗寶石做成的佛塔般地，似乎會有非常好的事情。</h6>
                        <h5 class="text-center tm-text-gray-dark">高峰頂上安</h5>
                        <h6 class="text-center tm-text-gray">因為能改用放眼萬事的立場，可以得到周圍的人們的信賴吧。</h6>
                        <h5 class="text-center tm-text-gray-dark">眾人皆仰望</h5>
                        <h6 class="text-center tm-text-gray">合乎正道的你的行為，能被很多人的認同及鼓勵。</h6>
                        <h5 class="text-center tm-text-gray-dark">莫作等閒看</h5>
                        <h6 class="text-center tm-text-gray">不用隨便的態度看事情，用正確的心思會招來更多的好的結果。</h6>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">願望：</span><span class="tm-text-primary">會充分地實現吧。</span>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">疾病：</span><span class="tm-text-primary">會治癒吧。</span>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">盼望的人：</span><span class="tm-text-primary">會出現吧。</span>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">遺失物：</span><span class="tm-text-primary">變得遲遲地才找到吧。</span>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">蓋新居、搬家、嫁娶、旅行、交往等：</span><span class="tm-text-primary">全部很好吧。</span>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark">祝福語：</span><span class="tm-text-primary">萬事行為謹慎。粗心大意行事的話，就會發生意想之外的災害吧。</span>
                    </div>
                    <div class="text-center">
                        <a href="許願池.php" class="btn btn-primary tm-btn-big">前往許願</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    <!-- ======= Footer ======= -->
    <?php
    include ("footer.html");
    ?>
    <!-- End Footer -->

    <?php
    include ("template.php");
    echo $mainjs ;
    ?>
    <!--verify-->
    <?php
    include ("verify.html");
    ?>
    <!--verify end-->
</body>
</html>