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
    $search='';
    if(isset($_GET['search'])){ $search = $_GET['search']; }
    include("mysql_connect.inc.php");

    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM `order` WHERE (`member_name` LIKE '%$search%') OR (`order_id` LIKE '%$search%') OR (`order_totalprice` LIKE '%$search%') OR (`order_time` LIKE '%$search%')")) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= "<tr><td scope=\"row\">$row[member_name]</td><th><a href=\"cart.php?order=$row[order_id]\">$row[order_id]</th><td>$row[order_totalprice]</td><td>$row[order_time]</td></tr>";
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
      padding: 1px;
    }
    .btn-light{
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
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
              if($_SESSION["Name"] == 'admin')
              {
                echo '<li><a class="nav-link scrollto active" href="商品管理.php">管理中心</a></li>';
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
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>管理中心</h2>
          </div>
  
        </div>
    </section>
    <!-- End Breadcrumbs Section -->
    <?php
    if($_SESSION['Name']=='admin'){
      echo '
      <section id="store" class="portfolio">
          <div class="container" data-aos="fade-up">
              <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <!--左側-->
                  <div class="col-sm-3">
                      <table class="table table-bordered" style="table-layout:fixed">
                          <tr>
                            <th><button id="product-manager"><a href="商品管理.php"><h5>商品管理</h5></button></th>
                          </tr>
                          <tr>
                            <th>
                              <button id="member-manager"><h5><a href="會員管理.php">會員管理</a></h5></button>
                            </th>
                          </tr>
                          <tr>
                            <th>
                              <button id="wish-manager"><h5><a href="許願池管理.php">許願池管理</a></h5></button>
                            </th>
                          </tr>
                          <tr>
                            <th>
                              <button id="order-manager"><h5><a href="orderForManager.php">訂單管理</a></h5></button>
                            </th>
                          </tr>
                      </table>
                  </div>
                  <!--右側-->
                  <div class="col-sm-9">
                    <table class="table">
                      <tr>
                        <td class="pt-3" valign="middle" colspan="3">
                          <h5>訂單管理</h5>
                        </td>

                        <!-- 搜尋框 -->
                        <form>
                          <td class="ps-5" scope="col" align="right" valign="middle">
                            <input type="text" class="input form-control" placeholder="搜尋" name="search">                            
                          </td>
                          <td align="center" valign="middle">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                          </td>
                        </form>

                        <td  class="pt-3" align="center" valign="middle">
                          <button type="button" id="newProduct" class="btn btn-light">
                            <a href="insertOrder.php"><h6 class="pt-2">新增訂單<h6>
                          </button>
                        </td>
                      </tr>
                    </table>
                    
                    
                    <div id="product-table">
                      <table id="table-product" class="table table-bordered" style="table-layout:fixed">
                        <thead>
                          <tr>
                            <th scope="col">會員姓名</th>
                            <th scope="col">訂單編號</th>
                            <th scope="col">應付金額</th>
                            <th scope="col">建檔日期</th>
                          </tr>
                        </thead>
                        <tbody>';
                          echo $data;
                  echo '</tbody>
                      </table>
                    </div>
                  </div>
              </div>
          </div><!--container end-->
      </section><!-- End Portfolio Section -->';
    }
    else{
      echo "您無權限";
    }
    ?>
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