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
  
  <!--商品管理-->
  <?php
  $search='';
  if(isset($_GET['search'])){ $search = $_GET['search']; }
    include("mysql_connect.inc.php");

    // 送出查詢的SQL指令
    if ($result = mysqli_query($link, "SELECT * FROM member WHERE (`member_name` LIKE '%$search%') OR (`member_email` LIKE '%$search%') OR (`member_password` LIKE '%$search%') OR (`member_level` LIKE '%$search%')")) {
    while ($row = mysqli_fetch_assoc($result)) {
    $data .= "<tr><th scope=\"row\">$row[member_name]</th><td>$row[member_email]</td><td>$row[member_password]</td><td>$row[member_level]</td></tr>";
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
    .new-product{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
      padding-top: 3px;
      padding-bottom: 3px;
      padding-left: 10px;
      padding-right: 10px;
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
      if($_SESSION['Name'] == 'admin')
      {
        echo'
        <section id="store" class="portfolio">
          <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <!--左側-->
              <div class="col-sm-3">
                <table class="table table-bordered">
                  <tr>
                    <th><button id="product-manager"><h5><a href="商品管理.php">商品管理</h5></button></th>
                  </tr>
                  <tr>
                    <th><button id="member-manager"><h5><a href="會員管理.php">會員管理</h5></button></th>
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
                    <h5>會員管理</h5>
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
                      <a href="insertMember.php"><h6 class="pt-2">新增會員<h6>
                    </button>
                  </td>
                  <td class="pt-3" align="center" valign="middle">
                    <button type="button" id="newProduct" class="btn btn-light">
                      <a href="delete.php"><h6 class="pt-2">刪除會員<h6>
                    </button>
                  </td>
                  <td class="pt-3" align="center" valign="middle">
                    <button type="button" id="newProduct" class="btn btn-light">
                      <a href="updateMember.php"><h6 class="pt-2">修改會員<h6>
                    </button>
                  </td>
                </tr>
              </table>

                <!--member table start-->
                <div id="member-table">
                  <table id="table-member" class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">信徒名稱</th>
                        <th scope="col">email</th>
                        <th scope="col">密碼</th>
                        <th scope="col">會員等級</th>
                      </tr>
                    </thead>';
                    echo $data;
                    echo '
                  </table>
                </div>
                <!--member table end-->
              </div>
            </div>
          </div>
        </section><!-- End Portfolio Section -->';}
    else
    {
      echo '您無權限觀看此頁面!';
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