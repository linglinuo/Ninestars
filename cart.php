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
  <style>
    .numbutton{
      background-color: #eb5d1e;
      color: #fef8f5;
      border-radius: 10px;
    }
    .buybtn{
      background-color: #eb5d1e;
      color: #fef8f5;
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

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="text-align: left;">訂單內容</h2>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <!--title-->
        <div class="row">
          <div class="col-3">
            <h4>商品名</h4>
          </div>
          <div class="col-3">
            <h4>單價</h4>
          </div>
          <div class="col-3">
            <h4>數量</h4>
          </div>
          <div class="col-3">
            <h4>總計</h4>
          </div>
        </div>
        <!--item1-->
        <div class="row mt-3">
          <div class="col-3 d-flex">
            <img src="img/portfolio/a1.png" alt="" style="width: 100px; height: 75px;">
            <h5 class="px-4">考試御守</h5>
          </div>
          <div class="col-3">
            <span>$</span><h5 id="price" style="display: inline;">80</h5>
          </div>
          <div class="col-3">
              <span id="num">1</span>
          </div>
          <div class="col-3">
            <span>$</span><h5 id="totalprice" style="display: inline;"></h5>
          </div>
        </div>

        <!--item1-->
        <div class="row mt-3">
          <div class="col-3 d-flex">
            <img src="img/portfolio/a2.png" alt="" style="width: 100px; height: 75px;">
            <h5 class="px-4">戀愛御守</h5>
          </div>
          <div class="col-3">
            <span>$</span><h5 id="price2" style="display: inline;">80</h5>
          </div>
          <div class="col-3">
            <span id="num2">1</span>
          </div>
          <div class="col-3">
            <span>$</span><h5 id="totalprice2" style="display: inline;"></h5>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-4"></div>
          <div class="col-4">
            <h3>總金額</h3>
          </div>
          <div class="col-4">
            <span>$</span>
            <h2 id="payment" style="display: inline;">160</h2>
          </div>
        </div>

      </div>
    </section>

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
  <script>
    $(function () {
      var x = document.getElementById("num").innerText;
      var price = document.getElementById("price").innerText;
      document.getElementById("totalprice").innerHTML = price;
      var totalprice;
      var payment;

      $("#plus").click(function(){
        x++;
        document.getElementById("num").innerHTML = x;
        if(x<=0){
            document.getElementById("num").innerHTML = 0;
        }
        price = document.getElementById("price").innerText;
        totalprice = price*x;
        if(x<=0){
          document.getElementById("totalprice").innerHTML = 0;
        }
        else{
          document.getElementById("totalprice").innerHTML = totalprice;
        }
        var totalprice = document.getElementById("totalprice").innerText;
        totalprice = parseInt(totalprice);
        var totalprice2 = document.getElementById("totalprice2").innerText;
        totalprice2 = parseInt(totalprice2);
        var payment = totalprice + totalprice2;
        document.getElementById("payment").innerHTML = payment;
      });

      $("#minus").click(function(){
        x--;
        document.getElementById("num").innerHTML = x;
        if(x<=0){
            document.getElementById("num").innerHTML = 0;
        }
        var price = document.getElementById("price").innerText;
        var totalprice = price*x;
        if(x<=0){
          document.getElementById("totalprice").innerHTML = 0;
        }
        else{
          document.getElementById("totalprice").innerHTML = totalprice;
        }
        var totalprice = document.getElementById("totalprice").innerText;
        totalprice = parseInt(totalprice);
        var totalprice2 = document.getElementById("totalprice2").innerText;
        totalprice2 = parseInt(totalprice2);
        var payment = totalprice + totalprice2;
        document.getElementById("payment").innerHTML = payment;
      });

      var y = document.getElementById("num2").innerText;
      var price2 = document.getElementById("price2").innerText;
      document.getElementById("totalprice2").innerHTML = price2;
      var totalprice2;
      var payment2;
      $("#plus2").click(function(){
        y++;
        document.getElementById("num2").innerHTML = y;
        if(y<=0){
            document.getElementById("num2").innerHTML = 0;
        }
        price2 = document.getElementById("price2").innerText;
        totalprice2 = price2*y;
        if(y<=0){
          document.getElementById("totalprice2").innerHTML = 0;
        }
        else{
          document.getElementById("totalprice2").innerHTML = totalprice2;
        }
        var totalprice = document.getElementById("totalprice").innerText;
        totalprice = parseInt(totalprice);
        var totalprice2 = document.getElementById("totalprice2").innerText;
        totalprice2 = parseInt(totalprice2);
        var payment = totalprice + totalprice2;
        document.getElementById("payment").innerHTML = payment;
      });

      $("#minus2").click(function(){
        y--;
        document.getElementById("num2").innerHTML = y;
        if(y<=0){
            document.getElementById("num2").innerHTML = 0;
        }
        var price2 = document.getElementById("price2").innerText;
        var totalprice2 = price2*y;
        if(y<=0){
          document.getElementById("totalprice2").innerHTML = 0;
        }
        else{
          document.getElementById("totalprice2").innerHTML = totalprice2;
        }
        var totalprice = document.getElementById("totalprice").innerText;
        totalprice = parseInt(totalprice);
        var totalprice2 = document.getElementById("totalprice2").innerText;
        totalprice2 = parseInt(totalprice2);
        var payment = totalprice + totalprice2;
        document.getElementById("payment").innerHTML = payment;
      });
       
    });
  </script>
<!--verify-->
<?php
  include ("verify.html");
  ?>
<!--verify end-->
</body>

</html>