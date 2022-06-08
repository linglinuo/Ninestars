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
    //商品管理
    include("mysql_connect.inc.php");
    $name = $_SESSION['Name'];
    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM `order` where `member_name` = '$name'")) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data .= "<tr><th scope=\"row\"><a href=\"cart.php?order=$row[order_id]\">$row[order_id]</th><td>$row[order_totalprice]</td><td>$row[order_time]</td></tr>";
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
          <li><a class="nav-link scrollto" href="index.php">首頁</a></li>
          <li><a class="nav-link scrollto" href="index.php">介紹</a></li>
          <li><a class="nav-link scrollto" href="store-page.php">小舖</a></li>
          <li><a class="nav-link scrollto" href="pray.php">求籤</a></li>
          <li><a class="nav-link scrollto" href="fortune.php">解籤</a></li>
          <li><a class="nav-link scrollto" href="wish.php">許願池</a></li>
          <?php
            if (isset($_SESSION['Name'])) {
                if($_SESSION["Name"] == 'admin')
                {
                  echo '<li><a class="nav-link scrollto" href="manageProduct.php">管理中心</a></li>';
                  echo '<li><a href="logout.php">'.$_SESSION['Name'].'   登出</a></li>';
                }
                else
                {
                  echo '<li><a class="nav-link scrollto active" href="manageOrder.php">訂單查詢</a></li>';
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
            <h2>訂單查詢</h2>
          </div>
        </div>
    </section>
    <!-- End Breadcrumbs Section -->
    <?php
                if($_SESSION['Name'] != null)
                {
                     echo "<section id=\"store\" class=\"portfolio\">
                     <div class=\"container\" data-aos=\"fade-up\">
                         <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                             <div class=\"col-12\">
                                 <!--order table start-->
                                 <div id=\"order-table\">
                                     <table class=\"table table-bordered\" style=\"table-layout:fixed\">
                                         <thead>
                                             <tr>
                                                 <th scope=\"col\">訂單編號</th>
                                                 <th scope=\"col\">應付金額</th>
                                                 <th scope=\"col\">建檔日期</th>
                                             </tr>
                                         </thead>
                                         <tbody>";
                     echo $data;
                     echo "
                                                        </tbody>
                                                </table>
                                                <!--product table end-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!--container end-->
                            </section><!-- End Portfolio Section -->";
                    
                }
                else
                {
                     echo '<meta http-equiv=REFRESH CONTENT=0;url=plslogin.php>';
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