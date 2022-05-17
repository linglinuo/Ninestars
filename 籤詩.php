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
    <!--籤詩-->
    <?php
    include("mysql_connect.inc.php");
    
    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM `fortune poems` WHERE `poem_id`=".$_GET['id'])) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= "
        <div class=\"container-fluid tm-container-content tm-mt-60\">
            <div class=\"row mb-4\">
                <h2 class=\"col-12 tm-text-primary text-left\">$row[poem_no]</h2>
            </div>
            <div class=\"row tm-mb-90\">
                <div class=\"col-xl-4 col-lg-5 col-md-6 col-sm-12\">
                    <img src=\"http://www.chance.org.tw/%E7%B1%A4%E8%A9%A9%E9%9B%86/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4%E6%8E%83%E6%8F%8F%E5%9C%96%E7%89%87/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4$row[poem_url]a.jpg\" alt=\"Image\" class=\"img-fluid\">
                </div>
                <div class=\"col-xl-4 col-lg-5 col-md-6 col-sm-12\">
                    <img src=\"http://www.chance.org.tw/%E7%B1%A4%E8%A9%A9%E9%9B%86/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4%E6%8E%83%E6%8F%8F%E5%9C%96%E7%89%87/%E6%B7%BA%E8%8D%89%E9%87%91%E9%BE%8D%E5%B1%B1%E8%A7%80%E9%9F%B3%E5%AF%BA%E4%B8%80%E7%99%BE%E7%B1%A4$row[poem_url]b.jpg\" alt=\"Image\" class=\"img-fluid\">
                </div>
                <div class=\"col-xl-4 col-lg-5 col-md-6 col-sm-12\">
                    <div class=\"tm-bg-gray tm-video-details\">
                        <h2 class=\"text-center tm-text-gray-dark mb-4\"><b>$row[poem_sign]</b></h2>
                        <div class=\"mb-4\">
                            $row[poem_text]
                        </div>
                            $row[poem_meaning]
                        <div class=\"text-center\">
                            <a href=\"許願池.php\" class=\"btn btn-primary tm-btn-big\">前往許願</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid, tm-container-content -->
        ";
        }
        mysqli_free_result($result); // 釋放佔用的記憶體
        }
        mysqli_close($link); // 關閉資料庫連結
    ?>
    <!--籤詩結束-->
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
            <input class="form-control tm-search-input text-left" type="search" placeholder="搜尋" aria-label="Search" style="margin-top: 0px;">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <?php echo $data;?><!--商品-->

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