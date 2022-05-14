<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include ("template.php");
        echo $top ;
        echo $extracss;
        echo $maincss;
        echo $sourcejs;
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
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<!--login-->
<?php
include ("login.php");
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
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤049a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第四十九支籤</h2>
                        <a href="籤詩.php?id=49">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤050a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十支籤</h2>
                        <a href="籤詩.php?id=50">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤051a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十一支籤</h2>
                        <a href="籤詩.php?id=51">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤052a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十二支籤</h2>
                        <a href="籤詩.php?id=52">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤053a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十三支籤</h2>
                        <a href="籤詩.php?id=53">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤054a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十四支籤</h2>
                        <a href="籤詩.php?id=54">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤055a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十五支籤</h2>
                        <a href="籤詩.php?id=55">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤056a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十六支籤</h2>
                        <a href="籤詩.php?id=56">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤057a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十七支籤</h2>
                        <a href="籤詩.php?id=57">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤058a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十八支籤</h2>
                        <a href="籤詩.php?id=58">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤059a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第五十九支籤</h2>
                        <a href="籤詩.php?id=59">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤060a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第六十支籤</h2>
                        <a href="籤詩.php?id=60">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤061a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第六十一支籤</h2>
                        <a href="籤詩.php?id=61">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤062a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第六十二支籤</h2>
                        <a href="籤詩.php?id=62">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤063a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第六十三支籤</h2>
                        <a href="籤詩.php?id=63">View more</a>
                    </figcaption>                    
                </figure>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img\image_a_small\淺草金龍山觀音寺一百籤064a.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>第六十四支籤</h2>
                        <a href="籤詩.php?id=64">View more</a>
                    </figcaption>                    
                </figure>
            </div>         
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="解籤3.php" class="btn btn-primary tm-btn-prev mb-2">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="解籤3.php" class="tm-paging-link">3</a>
                    <a href="解籤4.php" class="active tm-paging-link">4</a>
                    <a href="解籤5.php" class="tm-paging-link">5</a>
                    <a href="解籤6.php" class="tm-paging-link">6</a>
                </div>
                <a href="解籤5.php" class="btn btn-primary tm-btn-next">Next Page</a>
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