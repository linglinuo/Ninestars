<?php session_start(); ?>
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
  <?php
    $data='';
    //商品管理
    include("mysql_connect.inc.php");
    $name = $_SESSION['Name'];
    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM `order_content` where `order_id` = ".$_GET['order'])) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data .= "
      <tr>
        <th scope=\"row\"><img class=\"img-fluid\" src=\"$row[product_image]\" alt=\"\" style=\"width: 100px; height: 75px;\"></th>
        <td>$row[product_name]</td>
        <td>$row[product_price]</td>
        <td>$row[product_quantity]</td>
        <td>$row[product_unitprice]</td>
      </tr>";
      
      
    }
    mysqli_free_result($result); // 釋放佔用的記憶體
    };
    if ($result = mysqli_query($link, "SELECT * FROM `order` where `order_id` = ".$_GET['order'])) {
      while ($row = mysqli_fetch_assoc($result)) {
        $total= "$row[order_totalprice]";
      }
      mysqli_free_result($result); // 釋放佔用的記憶體
      };
    ?>
  <style>
    .numbutton{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
    }
    .buybtn{
      background-color: #eb5d1e;
      color: #ffffff;
      font-size: larger;
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
                  echo '<li><a class="nav-link scrollto active" href="訂單管理.php">訂單查詢</a></li>';
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

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>訂單內容</h2>
          </div>
        </div>
    </section>

    <?php
    if($_SESSION['Name']!=null){
    echo '
    <section class="inner-page">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-sm-6 justify-content-center text-center">
            <div id="product-table">
              <table id="table-product" class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"><h5>商品圖片</h5></th>
                    <th scope="col"><h5>商品名</h5></th>
                    <th scope="col"><h5>單價</h5></th>
                    <th scope="col"><h5>數量</h5></th>
                    <th scope="col"><h5>總計</h5></th>
                  </tr>
                </thead>
                <tbody>';
                  echo $data;
            echo  '
                  <th scope="col" colspan="2">
                    <h5 class="mt-2">總金額</h5>
                  </th>
                  <th scope="col">
                    <span>$</span>
                    <h2 id="payment" class="fw-bolder" style="display: inline;">';
                    echo $total;
            echo  '</th>
                  <th scope="col">
                    <button type="button" class="btn delete-order">';
                    echo '<a href="updateOrder_check.php?order='.$_GET['order'].'"><h5>修改訂單<h5>';
            echo  '</button>
                  <th scope="col">
                    <button type="button" class="btn delete-order">';
                    echo '<a href="deleteOrder_finish.php?order='.$_GET['order'].'"><h5>刪除訂單<h5>';
            echo  '</button>
                  </th>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>';
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
  echo $mainjs;
  ?>
<!--verify-->
<?php
  include ("verify.html");
  ?>
<!--verify end-->
</body>

</html>