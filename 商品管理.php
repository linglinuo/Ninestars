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
    $link = mysqli_connect("localhost", "root", "root123456", "437god") // 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    // 送出編碼的MySQL指令
    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

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
    .modal-backdrop {
      z-index: -1;
    }
    #myModal{
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
          <li><a class="nav-link scrollto active" href="index.php">首頁</a></li>
          <li><a class="nav-link scrollto" href="index.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="求籤.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="解籤1.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="許願池.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
                echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
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
                    <!--product table start-->
                    <div id="product-table">
                        <div class="row">
                            <div class="col-9">
                                <h2 style="text-align:left;">商品管理</h2>  
                            </div>
                            <div class="col-3">
                              <button type="button" id="newProduct" class="btn flex-end"><a href="新增商品.php"><h5>新增商品<h5></button>
                            </div>
                        </div>
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

        <!--product-modal start-->
        <form id="new-product-modal" name="new-product-modal" action="" method="POST" enctype="multipart/form-data"> 
            <div class="container">
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="product-modal" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">新增商品</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">商品編號</th>
                                        <td><input type="text" name="pid"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">商品圖片</th>
                                        <td><input type="hidden" name="MAX_FILE_SIZE" value="1024000">
                                        <input type="file" name="Myfile"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">商品名稱</th>
                                        <td><input type="text" name="pname"></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">分類</th>
                                        <td>
                                          <input type="text" name="pcategory">
                                        </td>  
                                    </tr>
                                    <tr>
                                        <th scope="row">顏色</th>
                                        <td><input type="text" name="pcolor"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">價格</th>
                                        <td><input type="text" name="pprice"></td>  
                                    </tr>
                                    <tr>
                                        <th scope="row">敘述</th>
                                        <td><input type="textarea" name="pintro"></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="btn btn-default" id="product-save" value="儲存" onclick="Submit()">
                            <input type="button" name="btn btn-default" id="closemodal" value="關閉">
                            <!-- <button type="button" class="btn btn-default closemodal" data-dismiss="modal">關閉</button> -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
        <!--product-modal end-->

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