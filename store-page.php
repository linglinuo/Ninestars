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
    $search='';
    if(isset($_GET['search'])){ $search = $_GET['search']; }
    include("mysql_connect.inc.php");

    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM `products` WHERE `product_name` LIKE '%$search%'")) {
    while ($row = mysqli_fetch_assoc($result)) {
      if($row['product_categories']=='御守')
      {
        $data .= "<div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                    <div class=\"portfolio-wrap\">
                      <img src=\"$row[product_picture]\" class=\"img-fluid\" alt=\"\">
                      <div class=\"portfolio-links\">
                        <a href=\"商品頁.php?id=$row[product_id]\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                      </div>
                      <div class=\"portfolio-info\">
                        <h4>$row[product_categories]</h4>
                      </div>
                    </div>
                  </div>";
      }
      else if($row['product_categories']=='佛具')
      {
        $data .= "<div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                    <div class=\"portfolio-wrap\">
                      <img src=\"$row[product_picture]\" class=\"img-fluid\" alt=\"\">
                      <div class=\"portfolio-links\">
                        <a href=\"商品頁.php?id=$row[product_id]\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                      </div>
                      <div class=\"portfolio-info\">
                        <h4>$row[product_categories]</h4>
                      </div>
                    </div>
                  </div>";
      }
      else
      {
        $data .= "<div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                    <div class=\"portfolio-wrap\">
                      <img src=\"$row[product_picture]\" class=\"img-fluid\" alt=\"\">
                      <div class=\"portfolio-links\">
                        <a href=\"商品頁.php?id=$row[product_id]\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                      </div>
                      <div class=\"portfolio-info\">
                        <h4>$row[product_categories]</h4>
                      </div>
                    </div>
                  </div>";
      }
    }
    mysqli_free_result($result); 
    }
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
          <li><a class="nav-link scrollto active" href="store-page.php">小舖</a></li>
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
      </nav><!-- .navbar -->
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
  
          <div class="justify-content-between align-items-center">
            <div class="row">
              <div class="col-12">
              <h2>神社小舖</h2>
              </div>
              <div class="col-12">
                <div class="d-flex justify-content-center align-items-center">
                    <form class="d-flex tm-search-form">
                        <input class="form-control tm-search-input" type="search" placeholder="搜尋" aria-label="Search" style="margin: 0px; text-align: left;" name="search">
                        <button class="btn btn-outline-success tm-search-btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
              </div>
            </div>
          </div>
  
        </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="store" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">御守</li>
              <li data-filter=".filter-card">佛具</li>
              <li data-filter=".filter-web">紀念品</li>
            </ul>
          </div>
        </div>
        <!--照片大小800X600-->
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php echo $data;?>
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
</body>

</html>