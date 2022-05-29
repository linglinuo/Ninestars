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
    //商品管理
    include("mysql_connect.inc.php");

    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM products")) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data .= "<tr><th scope=\"row\">$row[product_id]</th><td>$row[product_name]</td><td><img src=\"$row[product_picture]\" width=\"100px\"></td><td>$row[product_categories]</td><td>$row[product_type]</td><td>$row[product_price]</td></tr>";
    }
    mysqli_free_result($result); // 釋放佔用的記憶體
    }
    ?>


  <style>
    .error {
      color: #D82424;
      font-weight: normal;
      font-family: "微軟正黑體";
      display: inline;
      padding: 1px;
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
          <li><a class="nav-link scrollto active" href="index.php">首頁</a></li>
          <li><a class="nav-link scrollto" href="index.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
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
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>管理中心</h2>
          </div>
  
        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section id="store" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <!--左側-->
                <div class="col-3">
                    <table class="table table-bordered">
                        <tr>
                        <th><button id="product-manager"><a href="商品管理.php"><h4>商品管理</h4></button></th>
                        </tr>
                        <tr>
                        <th>
                          <button id="member-manager"><h4><a href="會員管理.php">會員管理</a></h4></button>
                        </th>
                        </tr>
                    </table>
                </div>
                <!--右側-->
                <div class="col-9">
                  <div class="row">
                    <div id="title">
                      <table>
                        <tr>
                          <td scope="col"><h5>商品管理<h5></td>

                          <!-- 搜尋框 -->
                          <div class="search">
                            <form>
                              <td scope="col" style="float: left; margin-left: 200px">
                                <input type="text" class="input form-control" placeholder="搜尋" name="search" style="width: 200px">
                              </td>
                              <td scope="col">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                              </td>
                            </form>
                          </div>
                          <!-- 搜尋框 -->

                          <td scope="col">
                            <button type="button" id="newProduct" class="btn">
                              <a href="新增商品.php"><h6>新增商品<h6>
                            </button>
                          </td>
                          <td scope="col">
                            <button type="button" id="newProduct" class="btn">
                              <a href="deleteProduct.php"><h6>刪除商品<h6>
                            </button>
                          </td>
                          <td scope="col">
                            <button type="button" id="newProduct" class="btn">
                              <a href="updateProduct.php"><h6>修改商品<h6>
                            </button>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                    <!--product table start-->
                    <div id="product-table">
                        <table id="table-product" class="table table-bordered" style="table-layout:fixed">
                            <thead>
                                <tr>
                                <th scope="col">商品編號</th>
                                <th scope="col">商品名</th>
                                <th scope="col">圖片</th>
                                <th scope="col">分類</th>
                                <th scope="col">種類</th>
                                <th scope="col">價格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo $data;?>
                            </tbody>
                        </table>
                        <!--product table end-->
                    </div>
                </div>
            </div>
        </div><!--container end-->
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