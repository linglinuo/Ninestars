<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>絲扇凄神社</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        .error {
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

    <div class="tm-hero d-flex justify-content-center align-items-center mt-5" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input text-left" type="search" placeholder="搜尋" aria-label="Search" style="margin: 0px;">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary text-left">
                所有神籤
            </h2>
        </div>
        <div class="row tm-mb-90 tm-gallery">
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤001a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第一支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤002a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第二支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤003a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第三支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤004a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第四支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤005a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤006a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第六支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤007a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第七支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤008a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第八支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤009a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第九支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤010a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第十支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤011a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第十一支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤012a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第十二支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤013a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第十三支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤014a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第十四支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤015a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第十五支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤016a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第十六支籤</h2>
                        <a href="籤詩1.php">View more</a>
                    </figcaption>                    
                </figure>
            </div>         
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="解籤1.php" class="active tm-paging-link">1</a>
                    <a href="解籤2.php" class="tm-paging-link">2</a>
                    <a href="解籤3.php" class="tm-paging-link">3</a>
                    <a href="解籤4.php" class="tm-paging-link">4</a>
                </div>
                <a href="解籤2.php" class="btn btn-primary tm-btn-next">Next Page</a>
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